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
        return $this->belongsTo(Viality::class);
    }

    /**
     * Localities relationship (One to many - Inverse).
     * 
     * @return \App\Locality
     */
    public function locality()
    {
        return $this->belongsTo(Locality::class);
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

    /**
     * States relationship (One to many - Inverse).
     * 
     * @return \App\State
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Settlement types relationship (One to many - Inverse).
     * 
     * @return \App\SettlementType
     */
    public function settlement_type()
    {
        return $this->belongsTo(SettlementType::class);
    }
}