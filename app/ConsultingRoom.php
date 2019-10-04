<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConsultingRoom extends Model
{
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Doctors relationship (One to Many).
     * 
     * @return \App\Doctor
     */

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    /**
     * Dates relationship (One to Many).
     * 
     * @return \App\Doctor
     */

    public function dates()
    {
        return $this->hasMany(Date::class);
    }
}
