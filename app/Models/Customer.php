<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
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
        'ethnicity' => NULL,
        'age' => 18,
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
     * Get the applications associated with the applicant.
     */
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
