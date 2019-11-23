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

    public function getAddress()
    {
        $address = $this->address()->first();
        if ($address) {
            return $address->street. ' ' . $address->number_ext. ' ' . $address->colony;
        }
        return "";
    }

    public function getFullName()
    {
        return $this->name . ' ' . $this->paternal_lastname . ' ' . $this->maternal_lastname;
    }

    public function getBirthplace()
    {
        $birthplace = $this->birthplace()->first();
        if ($birthplace) {
            return $birthplace->description;
        }
        return "";
    }

    public function getFullnameAttribute()
    {
        return $this->name . " " . $this->paternal_lastname . " " . $this->maternal_lastname;
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
