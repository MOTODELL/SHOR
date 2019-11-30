<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZipCode extends Model
{
    use SoftDeletes;
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    // NORMAL

    /**
     * Addresses relationship (One to many).
     * 
     * @return \App\Address
     */
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    
    // REVERSE
    
    
    /**
     * Municipalities relationship (One to many - Inverse).
     * 
     * @return \App\Municipality
     */
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}
