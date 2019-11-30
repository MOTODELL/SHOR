<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;
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
     * Zip codes relationship (One to many - Inverse).
     * 
     * @return \App\ZipCode
     */
    public function zip_code()
    {
        return $this->belongsTo(ZipCode::class);
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
