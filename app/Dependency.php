<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependency extends Model
{

    // RELACIONES

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
