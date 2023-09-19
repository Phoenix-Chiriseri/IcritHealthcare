<?php

namespace App\Http\Controllers;

use App\Models\DailyEntry;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DailyEntryController extends Controller
{
    public function allHouseRecords(){    
        //get the authenticated users house
        $house = Auth::user()->house;
        //select the number of patients database that are based on the users house eg hearten
        $numberOfPatientsInHouse = DB::select("SELECT COUNT(*) AS count FROM patients WHERE house = ?", [$house]);           
        //each and every daily entry is going to display a staff name, patient details and daily entry records. the three tables are daily entry, users and patients. the left join joins the three tables and displays the data in the dashboard....
        $entries = DailyEntry::leftJoin('patients', 'daily_entries.patient_id', '=', 'patients.id')
        ->leftJoin('users', 'daily_entries.user_id', '=', 'users.id')
        ->where('users.house', $house)
        ->select(
            'users.username as user_name',
            'users.house as house',
            'patients.patient_name',
            'daily_entries.date',
            'daily_entries.personal_care',
            'daily_entries.shift',
            'daily_entries.id',
            'daily_entries.medication_admin',
            'daily_entries.activities',
            'daily_entries.incident',
            'daily_entries.appointments'
        )
        ->orderBy('daily_entries.id', 'desc')
        ->paginate(5);  
        return view('pages.viewHouseRecords', compact('entries'))->with("name", Auth::user()->username)->with("house", $house)->with("numberOfPatients",$numberOfPatientsInHouse);
    }  
    //view each and every daily entry by the users i.d and retrieve the data to the front end
    public function viewRecordById($id)
    {
    
    $entry = DailyEntry::join('users', 'daily_entries.user_id', '=', 'users.id')
    ->join('patients', 'daily_entries.patient_id', '=', 'patients.id')
    ->select(
        'daily_entries.*', // Select all fields from the daily_entries table
        'users.username as user_name',
        'patients.patient_name'
    )
    ->where('daily_entries.id', $id)
    ->first();
    return view('pages.singleDailyEntry', ['entry' => $entry]);  
    
    }
    
    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
       // Validate the request data
    $request->validate([
        'date' => 'required|date',
        'shift' => 'required', // Add validation for shift
        'patient_id' => 'required|exists:patients,id',
        'personal_care' => 'required', // Add validation for personal_care
        'medication_admin' => 'required', // Add validation for medication_admin
        'appointments' => 'required', // Add validation for appointments
        'activities' => 'required', // Add validation for activities
        'incident' => 'required', // Add validation for incident
    ]);

    // Create the daily entry and associate it with the user and patient
    $dailyEntry = new DailyEntry([
        'date' => $request->date,
        'shift' => $request->shift, // Assign the shift value
        'patient_id' => $request->patient_id,
        'personal_care' => $request->personal_care, // Assign the personal_care value
        'medication_admin' => $request->medication_admin, // Assign the medication_admin value
        'appointments' => $request->appointments, // Assign the appointments value
        'activities' => $request->activities, // Assign the activities value
        'incident' => $request->incident, // Assign the incident value
    ]);

    //get the authenticated user from the database
    $user = Auth::user();
    //the user is associated with the daily entry. save a daily entry that is associated to the user
    $user->dailyEntries()->save($dailyEntry);
    //return back to the screen and use sweet alert to show that the data has been saved
    return back()->with('success', 'Daily Entry added successfully.');
    
}
    /**
     * Display the specified resource.
    */
     public function createDailyEntry(){
        //get the house of the authenticated user
        $house = Auth::user()->house;
        //select all the patients from the table where the house is equal to the hous of the authenticated user
        $patients = DB::select('SELECT * FROM patients WHERE house = ?', [$house]);
        //collect all the patients from the database
        $patients = collect($patients);
        //return all the patients to the daily entry view where the house is equal to the authenticated users house
        return view('pages.dailyEntry')->with("patients",$patients);
     }
}
