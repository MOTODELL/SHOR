<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SsnType extends Model
{
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * SSN relationship (One to many).
     * 
     * @return \App\Ssn
     */
    public function ssns()
    {
        return $this->hasMany(Ssn::class);
    }
}
