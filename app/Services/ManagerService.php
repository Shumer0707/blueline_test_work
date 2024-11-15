<?php

namespace App\Services;

use App\Mail\ClientNotification;
use App\Mail\ManagerNotification;
use App\Models\Doctor;
use App\Models\Reservation;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

        $reservation = Reservation::find($validatedData['id']); // Make sure the request has 'id'

        if ($reservation) {

            if($validatedData['status'] === 'approved'){

                $reservation->status = $validatedData['status'];
                $reservation->preferred_slots = json_encode($validatedData['time_slot'], true);
                $reservation->doctor = $validatedData['doctor'];
                $reservation->save();

                $this -> sendNotifications($reservation);

                return 'success';

            }

            if($validatedData['status'] === 'refuse'){

                $reservation->status = $validatedData['status'];
                $reservation->save();

                $this -> sendNotifications($reservation);

                return 'success';
            }

            return 'error';

        } else {
            return 'error';
        }
    }

    public function sendNotifications($reservation)
{
    // Data for the client
    $clientDetails = [
        'message' => 'Ваш заказ успешно обработан.',
        'name' => $reservation->user['name'],
        'status' => $reservation['status'],
        'specialization' => $reservation->specialization['name'],
        'doctors' => $reservation['doctor'],
        'preferred_slots' => $reservation['preferred_slots'],
    ];

    // Data for the manager
    $managerDetails = [
        'message' => 'Поступил новый заказ от клиента.',
        'name' => $reservation->user['name'],
        'status' => $reservation['status'],
        'specialization' => $reservation->specialization['name'],
        'doctors' => $reservation['doctor'],
        'preferred_slots' => $reservation['preferred_slots'],
    ];

    // Sending a letter to the client
    Mail::to($reservation->user['email'])->send(new ClientNotification($clientDetails));

    // Send a letter to the manager
    Mail::to('manager@example.com')->send(new ManagerNotification($managerDetails));
}
}
