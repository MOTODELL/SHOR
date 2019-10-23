<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    // NORMAL

    /**
     * Doctors relationship (One to many).
     * 
     * @return \App\Doctor
     */
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
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

    // INVERSE

    /**
     * Vialities relationship (One to many - Inverse).
     * 
     * @return \App\Viality
     */
    public function viality()
    {
        return $this->belongsToMany(Viality::class);
    }

    /**
     * Localities relationship (One to many - Inverse).
     * 
     * @return \App\Locality
     */
    public function locality()
    {
        return $this->belongsToMany(Locality::class);
    }

    /**
     * Municipalities relationship (One to many - Inverse).
     * 
     * @return \App\Municipality
     */
    public function municipality()
    {
        return $this->belongsToMany(Municipality::class);
    }

    /**
     * States relationship (One to many - Inverse).
     * 
     * @return \App\State
     */
    public function state()
    {
        return $this->belongsToMany(State::class);
    }

    /**
     * Settlement types relationship (One to many - Inverse).
     * 
     * @return \App\SettlementType
     */
    public function settlement_type()
    {
        return $this->belongsToMany(SettlementType::class);
    }
}
