<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Date extends Model
{
    use SoftDeletes;
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
        return $this->belongsTo(User::class)->withTrashed();
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
        return $this->belongsTo(Patient::class)->withTrashed();
    }

    public function getPatient()
    {
        $patient = $this->patient()->first();
        if ($patient) {
            return $patient->name. ' ' . $patient->paternal_lastname. ' ' . $patient->maternal_lastname;
        }
        return "";
    }

    public function getStatus()
    {
        $state = $this->status()->first();
        if ($state) {
            return $state->description;
        }
        return "";
    }
}
