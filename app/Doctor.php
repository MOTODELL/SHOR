<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Doctor extends Model
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
     * Consulting room relationship (One to Many - Inverse).
     * 
     * @return App\ConsultingRoom
     */

     public function consultingRoom()
     {
         return $this->belongsTo(ConsultingRoom::class);
     }

    /**
     * States relationship (One to Many - Inverse).
     * 
     * @return App\State
     */

     public function state()
     {
         return $this->belongsTo(State::class);
     }
}
