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

    /**
     * Users relationship (One to many).
     * 
     * @return \App\Patient
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Municipality relationship (One to many).
     * 
     * @return \App\Municipality
     */
    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }

    /**
     * States relationship (One to many - Inverse).
     * 
     * @return \App\State
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
