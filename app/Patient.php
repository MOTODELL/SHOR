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

    // NORMAL

    /**
     * Dates relationship (One to Many).
     * 
     * @return \App\Date
     */

    public function dates()
    {
        return $this->hasMany(Date::class);
    }

    // INVERSE

    /**
     * State relationship (One to Many - Inverse).
     * 
     * @return \App\State
     */

    public function birthplace()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * SSN relationship (One to Many - Inverse).
     * 
     * @return \App\Ssn
     */

    public function ssn()
    {
        return $this->belongsTo(Ssn::class);
    }

    /**
     * Addresses relationship (One to Many - Inverse).
     * 
     * @return \App\Address
     */

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
