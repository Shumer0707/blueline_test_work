<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function home(){
        return view('manager.manager_home');
    }

    public function history(Request $request){
        return view('manager.manager_history');
    }
}
