<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Ssn extends Model
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
     * Patients relationship (One to One).
     * 
     * @return \App\Patient
     */
    public function patient()
    {
        return $this->hasOne(User::class);
    }

    // INVERSE

    /**
     * SSN types relationship (One to Many - Inverse).
     * 
     * @return \App\SsnType
     */
    public function ssn_type()
    {
        return $this->belongsTo(SsnType::class);
    }
}
