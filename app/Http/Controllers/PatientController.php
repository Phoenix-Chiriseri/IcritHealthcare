<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{

     public function index(){
        
      $house = Auth::user()->house;
      // Get daily entries associated with the logged-in user
      // Define the raw SQL query
      $query = "
              select * from users
      ";
  
       // Execute the raw SQL query with the user ID parameter
       $patients = DB::select($query); 
       return view('pages.addPatients')->with('users',$patients);

     }

     public function viewMyPatients(){
        //view only the patients that are assigned to the authenticated user
        $username = Auth::user()->username;
        $userAndPatients = Patient::leftJoin('users', 'patients.Staff_Id', '=', 'users.id')
             ->where('users.username', $username)
            ->select('patients.patient_name as patient_name','users.username as username') 
            ->get();
        return view('pages.viewMyPatients')->with("name",$username)->with('userAndPatients',$userAndPatients);

     }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'house' => 'required|string|max:255',
            'Staff_Id' => 'required|exists:users,id', // Validate that the user_id exists in the users table
        ]);

        // Create the patient and associate it with the user
        $patient = new Patient([
            'patient_name' => $request->name,
            'house' => $request->house,
        ]);

        $user = User::findOrFail($request->user_id);
        $user->patients()->save($patient);

        return redirect()->route('home')
            ->with('success', 'Patient added successfully.');
    }

}
