<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Patient;
use App\Model\User;

class Admin extends Controller
{
    public function index(){

        $patients = Patient::all();
        $user = User::all();
        return view("pages.virtualReality")->with("patients",$patients);
    }

    public function logout(){

        Auth::logout();
        $request->session();
        $request->session()->regenerateToken();
        return redirect('/admin');
    }
}

