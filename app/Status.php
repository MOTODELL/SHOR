<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    /**
     * Dates relationship (Many to Many).
     * 
     * @return relationship
     */

    public function status()
    {
        return $this->hasMany(Date::class);
    }
}
