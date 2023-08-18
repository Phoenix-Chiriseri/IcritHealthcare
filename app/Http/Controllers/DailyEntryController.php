<?php

namespace App\Http\Controllers;

use App\Models\DailyEntry;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DailyEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //query
    public function allHouseRecords(){

        //working code using a left join
        $userId = Auth::user()->house;
        $numberOfPatientsInHouse = DB::select("SELECT COUNT(*) AS count FROM patients WHERE house = ?", [$userId]);        
        $entries = DailyEntry::leftJoin('patients', 'daily_entries.patient_id', '=', 'patients.id')
            ->leftJoin('users', 'daily_entries.user_id', '=', 'users.id')
            ->where('users.house', $userId)
            ->select('users.username as user_name','users.house as house', 'patients.patient_name', 'daily_entries.date','daily_entries.personal_care','daily_entries.shift','daily_entries.medication_admin')
            ->get();
     return view('pages.viewHouseRecords', compact('entries'))->with("name", Auth::user()->username)->with("house", $userId)->with("numberOfPatients",$numberOfPatientsInHouse);
            //dd($entries);
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

    $user = Auth::user();
    $user->dailyEntries()->save($dailyEntry);

    return redirect()->route('home')
        ->with('success', 'Daily Entry added successfully.');
    }
    /**
     * Display the specified resource.
     */

     public function createDailyEntry(){

        //
        $houseId = Auth::user()->house;
    // Get patients belonging to the same house as the authenticated user using a raw SQL query
        $patients = DB::select('SELECT * FROM patients WHERE house = ?', [$houseId]);
    // You can convert the results to a collection if needed
        $patients = collect($patients);
        return view('pages.user-profile')->with("patients",$patients);

     }

}
