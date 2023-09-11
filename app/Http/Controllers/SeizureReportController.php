<?php

namespace App\Http\Controllers;

use App\Models\SeizureReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SeizureReportController extends Controller
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
         // Execute the raw SQL query with the user ID parameter
        $patients = DB::select($query, ['house' => $house]);
        return view('pages.getSeizureReport')->with("patients",$patients);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function viewAllSeizureReports()
    {
        //

        return view('pages.viewAllSeizureReports');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         // Validate the form data
         $validatedData = $request->validate([
            'ref_number' => 'required|string',
            'patient_id' => 'required|exists:patients,id', // Assuming 'patients' is your patients table
            'location' => 'required|string',
            'date_of_incident' => 'required|date',
            'time_of_incident' => 'required|date_format:H:i',
            'other_forms_1' => 'nullable|array', // This field can be an array
            'other_forms_1.*' => 'string', // Each item in the array should be a string
            'other_forms_2' => 'nullable|array', // This field can be an array
            'other_forms_2.*' => 'string', // Each item in the array should be a string
            'did_fall' => 'required|string|in:Forward,Backward,N/A',
            'initials_of_harm' => 'required|string',
            'incident_description' => 'required|string',
            'any_causes_to_incident' => 'required|string',
            'any_other_forms' => 'nullable|array', // This field can be an array
            'any_other_forms.*' => 'string', // Each item in the array should be a string
            'did_stiffen' => 'required|string|in:Yes,No',
            'loss_of_consciousness' => 'required|string|in:Yes,No',
            'colour_change' => 'required|string|in:Yes,No',
            'movement' => 'required|string|in:Yes,No',
            'breathing_difficulty' => 'required|string|in:Yes,No',
            'parts' => 'nullable|array', // This field can be an array
            'parts.*' => 'string', // Each item in the array should be a string
            'how_long_seizure' => 'required|string',
            'yes_incontinence' => 'required_if:no_incontinence,No|string|in:Yes,No',
            'condition_after_seizure' => 'nullable|array', // This field can be an array
            'condition_after_seizure.*' => 'string', // Each item in the array should be a string
            'recovery_date' => 'required|string',
            'person_injury' => 'required|string|in:Yes,No',
            'treatment' => 'required|string',
            'triggers' => 'nullable|array', // This field can be an array
            'triggers.*' => 'string', // Each item in the array should be a string
            'reported_by' => 'required|string',
            'report_date' => 'required|date',
        ]);
        // Create a new SeizureReport model instance and populate it with the form data

        
        
        

        $user = Auth::user();
        $seizureReport->user()->associate($user);
        //Save the SeizureReport to the database
        $seizureReport->save();
        echo "saved";
        // Create a new MedicationIncident instance and fill it with validated data
        // Save the MedicationIncident to the database
        // Optionally, you can redirect to a success page or return a response
        return back()->with('success', 'Seizure Report Added');
        // Populate other fields in a similar manner

    }

    /**
     * Display the specified resource.
     */
    public function show(SeizureReport $seizureReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SeizureReport $seizureReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SeizureReport $seizureReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SeizureReport $seizureReport)
    {
        //
    }
}
