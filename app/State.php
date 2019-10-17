<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
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
     * Patients relationship (One to many).
     * 
     * @return \App\Patient
     */
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
