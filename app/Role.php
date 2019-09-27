<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    Use SoftDeletes;
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Users relationship (Many to Many).
     * 
     * @return relationship
     */

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
