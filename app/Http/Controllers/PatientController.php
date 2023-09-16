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
       
        $username = Auth::user()->username;
        $house = Auth::user()->house;
        $userAndPatients = Patient::leftJoin('users', 'patients.Staff_Id', '=', 'users.id')
        ->where('users.username', $username)
        ->where('patients.house',$house) // Add this line
        ->select('patients.patient_name as patient_name', 'users.username as username') 
        ->get();
        return view('pages.viewMyPatients')->with("name", $username)->with('userAndPatients', $userAndPatients);
    }
    public function store(Request $request)
    {

        /*$validator = Validator::make($request->all(), [
            'patient_name' => 'required|string|max:255',
            'house' => 'required|string|max:255',
            'Staff_Id' => 'required|exists:users,id',
            'id_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|string|email|unique:patients,email|max:255',
        ]);
        */
        /*if ($validator->fails()) {
            return redirect()->route('patient.create')
                ->withErrors($validator)
                ->withInput();
        }*/
        // Create a new patient record
        
        $patient = new Patient([
            'patient_name' => $request->input('patient_name'),
            'house' => $request->input('house'),
            'id_number' => $request->input('id_number'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
        ]);
    
        // Get the staff member (user) who is saving the patient
        $user = User::findOrFail($request->input('Staff_Id'));
        // Associate the patient with the staff member
        $user->patients()->save($patient);
        return back()->with('success', 'Patient added successfully.');
        }
    }
