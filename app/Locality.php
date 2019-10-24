<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
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

    /**
     * Municipalities relationship (One to many - Inverse).
     * 
     * @return \App\Municipality
     */
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}
