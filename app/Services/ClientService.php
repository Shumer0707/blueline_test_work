<?php

namespace App\Services;

use App\Models\Reservation;
use App\Models\Specialization;
use Illuminate\Support\Facades\Auth;

class ClientService
{
    // we get all the specializations
    public function getSpecializations(){
        $data = Specialization::all();
        return($data);
    }

    // we get the requests of the authorized user
    public function getReservationsUser(){
        $data = Reservation::where('user_id', Auth::user()->id)->get();
        return($data);
    }

    // we write the request to the database
    public function createRequest($data){
        $Reservation = new Reservation;
        $Reservation->user_id = Auth::user()->id;
        $Reservation->specialization_id  = $data['specializations'];
        $Reservation->preferred_slots = json_encode($data['reception_time'], true);
        $Reservation->save();
    }
}
