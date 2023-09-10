<?php

namespace App\Http\Controllers;

use App\Models\ABCReport;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Auth;

class ABCReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $house = Auth::user()->house;
        $query = "
                select * from patients where house = :house
         ";
        $patients = DB::select($query, ['house' => $house]);
        return view('pages.viewAbcReport')->with("patients",$patients);
    }

    public function allAbcReports(){

        return view("pages.viewAllAbcReports");
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
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'initials_of_person' => 'required|string|max:255',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'influencing_factors' => 'required|string|max:255',
            'what_happened_before_incident' => 'required|string|max:255',
            'behaviors' => 'required|array', // Assuming you want at least one behavior selected
            'behaviors.*' => 'in:Physical,Verbal,Damage,Other',
            'actions_taken' => 'required|string|max:255',
            'done_differently' => 'required|string|max:255',
            'proact_scip_interventions' => 'required|in:Yes,No',
            'medication_administered' => 'required|in:Yes,No',
            'physical_contact_injury_intimidation' => 'required|in:Yes,No',
        ]);

        // Create a new ABC report
        $abcReport = new ABCReport($validatedData);
        // Associate the patient and the user with the ABC report
        $abcReport->patient()->associate(Patient::find($validatedData['patient_id']));
        $abcReport->user()->associate(auth()->user()); // Assumes you are using Laravel's built-in authentication
        // Save the ABC report to the database
        $abcReport->save();
        // Redirect to a success page or show a success message
        echo "saved";
    }
    /**
     * Display the specified resource.
     */
    public function show(ABCReport $aBCReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ABCReport $aBCReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ABCReport $aBCReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ABCReport $aBCReport)
    {
        //
    }
}
