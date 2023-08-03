<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Patient;

class Admin extends Controller
{
    //
    public function index(){

        return view('pages.registerPatient');
    }
}

