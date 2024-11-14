<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }
}
