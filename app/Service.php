<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Dates relationship (Many to many).
     * 
     * @return \App\Date
     */
    public function dates()
    {
        return $this->belongsToMany(Date::class);
    }
}
