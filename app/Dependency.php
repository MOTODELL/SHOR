<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dependency extends Model
{
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    /**
     * Users relationship (One to Many).
     * 
     * @return \App\User
     */

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
