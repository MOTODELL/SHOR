<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

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
