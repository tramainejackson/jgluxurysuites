<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    /**
     * Scope a query to only include standard calls.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStandardCalls($query)
    {
        return $query->where('type', 'LIKE', 'sc_%');
    }

    /**
     * Scope a query to only include ho holds calls.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNoHoldsCalls($query)
    {
        return $query->where('type', 'LIKE', 'nh_%');
    }

    /**
     * Scope a query to only include standard calls.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSoundRoomCalls($query)
    {
        return $query->where('type', 'LIKE', 'sr_%');
    }
}
