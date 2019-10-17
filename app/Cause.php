<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cause extends Model
{
    use SoftDeletes;
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Dates relationship (Many to Many).
     * 
     * @return \App\Dates
     */

    public function dates()
    {
        return $this->belongsToMany(Date::class);
    }
}
