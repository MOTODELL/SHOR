<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dependency extends Model
{
    use SoftDeletes;

    // RELACIONES

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
