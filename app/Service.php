<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Dates relationship (Many to many).
     * 
     * @return \App\Date
     */
    public function dates()
    {
        return $this->belongsToMany(Date::class);
    }
}
