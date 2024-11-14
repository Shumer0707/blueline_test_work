<?php

namespace App\Services;

use App\Models\Doctor;
use App\Models\Reservation;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ManagerService
{
    public function getReservationsPanding(){
        $data = Reservation::where('status', 'pending')->get();
        return $data;
    }

    public function getReservationsAll(){
        $data = Reservation::orderBy('id', 'asc')->paginate(20);
        return $data;
    }
}
