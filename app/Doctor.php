<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Doctor extends Model
{
    use SoftDeletes;

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
     * Address relationship (One to Many - Inverse).
     * 
     * @return \App\Address
     */

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
