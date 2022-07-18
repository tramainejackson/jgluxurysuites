<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function calls_information($call_type, $call_count)
    {
        $call_cost = 0;
        $total_calls = 0;

        $options = array(
            'standard_call' => array(
                1 => 5,
                5 => 20,
                15 => 50,
                30 => 100
            ),
            'no_holds_call' => array(
                1 => 7.50,
                5 => 30,
                15 => 80,
                35 => 150
            ),
            'sound_room_call' => array(
                1 => 2.50,
                10 => 20,
                30 => 50
            ),
        );

        foreach ($options as $call => $counts) {
            if($call == $call_type) {
                foreach ($counts as $count => $cost) {
                    if($count == $call_count) {
                        $call_cost = $cost;
                        $total_calls = $count;

                        return array($total_calls, $call_cost);
                    }
                }
            }
        }

        return $call_cost;
    }
}
