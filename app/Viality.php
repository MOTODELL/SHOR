<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viality extends Model
{
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Addresses relationship (One to many).
     * 
     * @return \App\Address
     */
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
