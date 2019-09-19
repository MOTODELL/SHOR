<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    // RELACIONES

    public function titular()
    {
        return $this->hasOne(User::class);
    }
}
