<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Dates relationship (One to many).
     * 
     * @return \App\Date
     */
    public function dates()
    {
        return $this->hasMany(Date::class);
    }
}
