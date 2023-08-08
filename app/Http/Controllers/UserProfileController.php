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
        $user = Auth::user();
        $patients = Patient::all();
        //$patients = DB::select(DB::raw("SELECT * FROM patients distinct order by id desc"));
        return view('pages.user-profile',compact('patients'))->with("user",$user);
        
    }

    public function allResults(){

        //$users = User::with('patients')->get();
        $house = Auth::user()->house;
        $users = DB::table('users')
            ->where('house', '=', $house)
            ->toSql();
            dd($users);
        // Display the data
        foreach ($users as $user) {
            echo "User ID: " . $user->id . "<br>";
            echo "Username: " . $user->username . "<br>";
            echo "Email: " . $user->email . "<br>";
            echo "House: " . $user->house . "<br>";
        
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
    }

    public function allResultsByLoggedInHouse(){


         $loggedInUser = Auth::user();

    // Check if the user is logged in
    if ($loggedInUser) {
        $house = $loggedInUser->house;

        // Retrieve the daily entries for the logged-in user's house
        $dailyEntries = DB::table('daily_entries')
            ->join('patients', 'daily_entries.patient_id', '=', 'patients.Staff_Id')
            ->where('patients.house', $house)
            ->orderBy('daily_entries.id', 'DESC')
            ->get();

            dd($dailyEntries);

        return view('daily_entries.index', ['dailyEntries' => $dailyEntries]);
    } else {
        // Redirect the user to the login page if not logged in
        return redirect()->route('login');
    }
}



        /*$users = User::with('patients')->get();     
        // Display the data
        foreach ($users as $user) {
            echo "User ID: " . $user->id . "<br>";
            echo "Username: " . $user->username . "<br>";
            echo "Email: " . $user->email . "<br>";
            echo "House: " . $user->house . "<br>";
        
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
        } */      

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required','max:255', 'min:2'],
            'firstname' => ['max:100'],
            'lastname' => ['max:100'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            'address' => ['max:100'],
            'city' => ['max:100'],
            'country' => ['max:100'],
            'postal' => ['max:100'],
            'about' => ['max:255']
        ]);

        auth()->user()->update([
            'username' => $request->get('username'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email') ,
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postal' => $request->get('postal'),
            'about' => $request->get('about')
        ]);
        return back()->with('succes', 'Profile succesfully updated');
    }
}
