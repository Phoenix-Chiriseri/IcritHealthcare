<?php

namespace App\Http\Controllers;

use App\Models\IncidentReport;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class IncidentReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $house = Auth::user()->house;
        $query = "
                select * from patients where house = :house
         ";
        $patients = DB::select($query, ['house' => $house]);
        return view('pages.getIncidentReport')->with("patients",$patients);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        /*$validatedData = $request->validate([
            'patient_id' => 'required',
            'last_name' => 'required',
            'ref_number' => 'required',
            'location' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'person_affected' => 'required',
            'initials' => 'required',
            'description' => 'required',
            'identified_causes' => 'required',
            'completed_forms' => 'required',
            'name_of_person' => 'required',
            'date_completed' => 'required|date',
            'manager_on_call' => 'required',
        ]);
       */
        $incidentReport = new IncidentReport([
            'patient_id' => $request->patient_id,
            'last_name' => $request->last_name,
            'ref_number' => $request->ref_number,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'person_affected' => $request->person_affected,
            'initials' => $request->initials,
            'description' => $request->description,
            'identified_causes' => $request->identified_causes,
            'completed_forms' => $request->completed_forms,
            'name_of_person' => $request->name_of_person,
            'date_completed' => $request->date_completed,
            'manager_on_call' => $request->manager_on_call,
        ]);

        $user = Auth::user();
        //the user is associated with the daily entry. save a daily entry that is associated to the user
        $user->incidentReports()->save($incidentReport);
        //return back to the screen and use sweet alert to show that the data has been saved
        return back()->with('success', 'Incident Report Saved');       
    }

    /**
     * Display the specified resource.
     */
    public function show(IncidentReport $incidentReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IncidentReport $incidentReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IncidentReport $incidentReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncidentReport $incidentReport)
    {
        //
    }
}
