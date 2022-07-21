<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'name' => NULL,
        'email' => NULL,
        'institution' => NULL,
        'institution_id' => NULL,
        'institution_address' => NULL,
        'call_type' => NULL,
        'call_count' => NULL,
        'ethnicity' => NULL,
        'age' => 18,
        'paid' => 'N',
    ];

    /**
     * Get the application customer's name.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return ucwords(strtolower($value));
    }

    /**
     * Get the application customer's ethnicity.
     *
     * @param  string  $value
     * @return string
     */
    public function getEthnicityAttribute($value)
    {
        return ucwords(strtolower($value));
    }

    /**
     * Get the application's call_type.
     *
     * @param  string  $value
     * @return string
     */
    public function getCallTypeAttribute($value)
    {
        return ucwords(str_ireplace('_', " ", $value));
    }

    /**
     * Get the application's email.
     *
     * @param  string  $value
     * @return string
     */
    public function getEmailAttribute($value)
    {
        return strtolower($value);
    }

    /**
     * Get the application's institution.
     *
     * @param  string  $value
     * @return string
     */
    public function getInstitutionAttribute($value)
    {
        return ucwords(strtolower($value));
    }

    /**
     * The model's call information. Retrieve type and count
     * @param $call_count int
     * @param $call_type int
     * @return array
     */
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
            if ($call == $call_type) {
                foreach ($counts as $count => $cost) {
                    if ($count == $call_count) {
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
