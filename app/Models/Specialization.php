<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    // get all the doctors with similar specialization
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
