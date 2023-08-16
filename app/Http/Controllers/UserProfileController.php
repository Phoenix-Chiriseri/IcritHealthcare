<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Patient;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Model\User;

class UserProfileController extends Controller
{
    public function show()
    {
       // return view('home', compact('users'));
        //$patients = DB::select(DB::raw("SELECT * FROM patients distinct order by id desc"));
       // return view('pages.user-profile',compact('patients'))->with("user",$user);
        
    }
}
