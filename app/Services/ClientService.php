<?php

namespace App\Services;

use App\Models\Reservation;
use App\Models\Specialization;
use Illuminate\Support\Facades\Auth;

class ClientService
{
    public function getSpecializations(){
        $data = Specialization::all();
        return($data);
    }

    public function getReservationsUser(){
        $data = Reservation::where('user_id', Auth::user()->id)->get();
        return($data);
    }

    public function createRequest($data){
        // dd($data);
        $Reservation = new Reservation;
        $Reservation->user_id = Auth::user()->id;
        $Reservation->specialization_id  = $data['specializations'];
        $Reservation->preferred_slots = json_encode($data['reception_time'], true);
        // dd($Reservation);
        $Reservation->save();
    }
}
