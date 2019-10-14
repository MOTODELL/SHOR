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

    /**
     * Users relationship (Many to Many - Inverse).
     * 
     * @return relationship
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Patients relationship (Many to Many - Inverse).
     * 
     * @return relationship
     */

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    /**
     * Status relationship (Many to Many - Inverse).
     * 
     * @return relationship
     */

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
