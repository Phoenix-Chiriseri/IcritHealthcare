<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }
        return abort(404);
    }

    public function vr()
    {
        $patients = Patient::all();
        $users = User::all();
        return view("pages.virtual-reality")->with("patients",$patients)->with("users",$users);
    }

    public function rtl()
    {
        return view("pages.rtl");
    }

    public function profile()
    {
        $users = User::with('patients')->get();
        dd($users);
        // Display the data
        foreach ($users as $user) {
            echo "User ID: " . $user->id . "<br>";
            echo "Username: " . $user->username . "<br>";
            echo "Email: " . $user->email . "<br>";
            echo "House: " . $user->house . "<br>"; 
            dd($user->id);
            dd($user->username);
            dd($user->email);
            dd($user->house);
            
            if ($user->patients->isNotEmpty()) {
                echo "Patients: <br>";
                foreach ($user->patients as $patient) {
                    echo "- Patient Name: " . $patient->patient_name . "<br>";
                    echo "- Patient House: " . $patient->house . "<br>";
                    echo "<br>";
                }
            } else {
                echo "No associated patients<br><br>";
            }
        }     
        return view("pages.profile-static");
    }

    public function signin()
    {
        return view("pages.sign-in-static");
    }

    public function signup()
    {
        return view("pages.sign-up-static");
    }
}
