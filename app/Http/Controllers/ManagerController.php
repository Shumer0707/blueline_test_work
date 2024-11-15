<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManagerFormRequest;
use Illuminate\Http\Request;
use App\Services\ManagerService;

class ManagerController extends Controller
{
    private $managerService;

    public function __construct(ManagerService $managerService){
        $this->managerService = $managerService;
    }

    public function home(){
        $data['reservations'] = $this->managerService->getReservationsPanding();
        return view('manager.manager_home')->with($data);
    }

    public function history(){
        $data['reservations'] = $this->managerService->getReservationsAll();
        return view('manager.manager_history')->with($data);
    }

    public function updateRequest(ManagerFormRequest $request){
        $validatedData = $request->validated();
        $data['answer'] = $this->managerService->updateRequest($validatedData);
        $data['reservations'] = $this->managerService->getReservationsPanding();
        return view('manager.manager_home')->with($data);
    }
}
