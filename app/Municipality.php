<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Addresses relationship (One to many).
     * 
     * @return \App\Address
     */
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    /**
     * Localities relationship (One to many).
     * 
     * @return \App\Locality
     */
    public function localities()
    {
        return $this->hasMany(Locality::class);
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
     * Zip codes relationship (One to many - Inverse).
     * 
     * @return \App\ZipCode
     */
    public function zip_code()
    {
        return $this->belongsTo(ZipCode::class);
    }
}
