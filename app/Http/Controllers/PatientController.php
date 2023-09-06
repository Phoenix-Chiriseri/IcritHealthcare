<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index()
    {   
        $house = Auth::user()->house;

        // Get daily entries associated with the logged-in user
        // Define the raw SQL query
        $query = "SELECT * FROM users";

        // Execute the raw SQL query with the user ID parameter
        $users = DB::select($query); 

        return view('pages.addPatients')->with('users', $users);
    }

    public function viewMyPatients()
    {
        // View only the patients that are assigned to the authenticated user
        $username = Auth::user()->username;

        $userAndPatients = Patient::leftJoin('users', 'patients.Staff_Id', '=', 'users.id')
            ->where('users.username', $username)
            ->select('patients.patient_name as patient_name', 'users.username as username') 
            ->get();

        return view('pages.viewMyPatients')->with("name", $username)->with('userAndPatients', $userAndPatients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Save the patient into the database
         // Validate the incoming request data
         $validator = Validator::make($request->all(), [
            'patient_name' => 'required|string|max:255',
            'house' => 'required|string|max:255',
            'Staff_Id' => 'required|exists:users,id',
            'id_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|string|email|unique:patients,email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('patient.create')
                ->withErrors($validator)
                ->withInput();
        }
        // Create a new patient record
        $patient = new Patient([
            'patient_name' => $request->input('patient_name'),
            'house' => $request->input('house'),
            'Staff_Id' => $request->input('Staff_Id'),
            'id_number' => $request->input('id_number'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
        ]);

        $user = User::findOrFail($request->Staff_Id);
        $user->patients()->save($patient);
        return back()->with('success', 'Patient added successfully.');
    }
}
