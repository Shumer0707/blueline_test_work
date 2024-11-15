<?php

namespace App\Services;

use App\Models\Doctor;
use App\Models\Reservation;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ManagerService
{
    // We get pending applications for managers
    public function getReservationsPanding(){
        $data = Reservation::where('status', 'pending')->orderBy('id', 'asc')->get();
        return $data;
    }

    //We get all applications with pagination
    public function getReservationsAll(){
        $data = Reservation::orderBy('id', 'asc')->paginate(20);
        return $data;
    }

    //Updating the application
    public function updateRequest($validatedData){
        $Reservation = Reservation::find($validatedData['id']); // Make sure the request has 'id'
        if ($Reservation) {
            if($validatedData['status'] === 'approved'){
                $Reservation->status = $validatedData['status'];
                $Reservation->preferred_slots = json_encode($validatedData['time_slot'], true);
                $Reservation->doctor = $validatedData['doctor'];
                $Reservation->save();
                return 'success';
            }
            if($validatedData['status'] === 'refuse'){
                $Reservation->status = $validatedData['status'];
                $Reservation->save();
                return 'success';
            }
            return 'error';
        } else {
            return 'error';
        }
    }
}
