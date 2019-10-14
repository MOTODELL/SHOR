<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Patient extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->{$user->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * State relationship (One to Many - Inverse).
     * 
     * @return relationship
     */

    public function titular()
    {
        return $this->belongsTo(Patient::class);
    }

    /**
     * State relationship (One to Many - Inverse).
     * 
     * @return relationship
     */

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * State relationship (One to Many - Inverse).
     * 
     * @return relationship
     */

    public function birthplace()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * SSN relationship (One to Many - Inverse).
     * 
     * @return relationship
     */

    public function ssn()
    {
        return $this->belongsTo(Ssn::class);
    }

    /**
     * Dates relationship (One to Many - Inverse).
     * 
     * @return relationship
     */

    public function dates()
    {
        return $this->hasMany(Date::class);
    }
}
