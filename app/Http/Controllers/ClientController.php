<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientFormRequest;
use App\Services\ClientService;


class ClientController extends Controller
{

    protected $clientService;

    public function __construct(ClientService $clientService){
        $this->clientService = $clientService;
    }

    public function home(){
        $data['specializations'] = $this->clientService->getSpecializations();
        return view('client.client_home')->with($data);
    }

    public function history(){
        $data['reservations'] = $this->clientService->getReservationsUser();
        return view('client.client_history')->with($data);
    }

    public function createRequest(ClientFormRequest $request){
        $validatedData = $request->validated();
        $this->clientService->createRequest($validatedData);
        return redirect(route('client.history'));
    }
}
