<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    // get a specialization
    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    // get the user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // get all the doctors who are suitable for the specialization
    public function doctors()
    {
        return $this->hasManyThrough(Doctor::class, Specialization::class, 'id', 'specialization_id', 'specialization_id', 'id' );
    }
}
