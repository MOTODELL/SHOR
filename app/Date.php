<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    // NORMAL

    /**
     * Causes relationship (Many to Many).
     * 
     * @return \App\Cause
     */

    public function causes()
    {
        return $this->belongsToMany(Cause::class);
    }

    /**
     * Services relationship (Many to Many).
     * 
     * @return \App\Service
     */

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    /**
     * Observations relationship (One to Many).
     * 
     * @return \App\Observation
     */

    public function observations()
    {
        return $this->hasMany(Observation::class);
    }

    // INVERSE

    /**
     * Status relationship (One to Many - Inverse).
     * 
     * @return \App\Status
     */

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Users relationship (One to Many - Inverse).
     * 
     * @return \App\User
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Doctors relationship (One to Many - Inverse).
     * 
     * @return \App\Doctor
     */

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    /**
     * Patients relationship (One to Many - Inverse).
     * 
     * @return \App\Patient
     */

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
