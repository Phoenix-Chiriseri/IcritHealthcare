<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Patient;
use App\Model\User;

class Admin extends Controller
{
    //
    public function index(){

        $patients = Patient::all();
        $users = User::all();
        return view("pages.virtualReality")->with("patients",$patients);
    }
}

