<?php

namespace App\Http\Controllers;

use App\Models\SeizureReport;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

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
            'patient_id' => 'required|integer',
            'location' => 'required|string',
            'date_of_incident' => 'required|date',
            'time_of_incident' => 'required',
            'change_of_mood' => 'array',
            'restlessness' => 'array',
            'sensations' => 'array',
            'sound' => 'array',
            'other' => 'array',
            'standing' => 'array',
            'sitting' => 'array',
            'in_bed' => 'array',
            'unobserved_seizure' => 'array',
            'did_fall' => 'required|string',
            'initials_of_harm' => 'required|string',
            'incident_description' => 'required|string',
            'any_causes_to_incident' => 'required|string',
            'any_other_forms' => 'array',
            'did_stiffen' => 'required|string',
            'loss_of_consciousness' => 'required|string',
            'colour_change' => 'required|string',
            'movement' => 'required|string',
            'breathing_difficulty' => 'required|string',
            'left_body_parts' => 'array',
            'right_body_parts' => 'array',
            'both_body_parts' => 'array',
            'arms_body_parts' => 'array',
            'legs_body_parts' => 'array',
            'picking_body_parts' => 'array',
            'eyelid_body_parts' => 'array',
            'spasmodic_body_parts' => 'array',
            'facial_body_parts' => 'array',
            'eyes_body_parts' => 'array',
            'stiffening_arms_body_parts' => 'array',
            'stiffening_legs_body_parts' => 'array',
            'spasmodic_legs_body_parts' => 'array',
            'blank_stare_body_parts' => 'array',
            'tremors_body_parts' => 'array',
            'other_body_parts' => 'array',
            'how_long_seizure' => 'required|string',
            'yes_incontinence' => 'required|string',
            'no_incontinence' => 'required|string',
            'condition_after_seizure' => 'array',
            'recovery_date' => 'required|string',
            'person_injury' => 'required|string',
            'treatment' => 'required|string',
            'triggers' => 'array',
            'reported_by' => 'required|string',
            'report_date' => 'required|string',
        ]);

        // Create a new SeizureReport model instance and populate it with the form data
        $seizureReport = new SeizureReport();
        $seizureReport->ref_number = $request->input('ref_number');
        $seizureReport->patient_id = $request->input('patient_id');
        $seizureReport->location = $request->input('location');
        $seizureReport->date_of_incident = $request->input('date_of_incident');
        $seizureReport->time_of_incident = $request->input('time_of_incident');
        $seizureReport->change_of_mood = $request->input('change_of_mood', []);
        $seizureReport->restlessness = $request->input('restlessness', []);
        $seizureReport->sensations = $request->input('sensations', []);
        $seizureReport->sound = $request->input('sound', []);
        $seizureReport->other = $request->input('other', []);
        $seizureReport->standing = $request->input('standing', []);
        $seizureReport->sitting = $request->input('sitting', []);
        $seizureReport->in_bed = $request->input('in_bed', []);
        $seizureReport->unobserved_seizure = $request->input('unobserved_seizure', []);
        $seizureReport->did_fall = $request->input('did_fall');
        $seizureReport->initials_of_harm = $request->input('initials_of_harm');
        $seizureReport->incident_description = $request->input('incident_description');
        $seizureReport->any_causes_to_incident = $request->input('any_causes_to_incident');
        $seizureReport->any_other_forms = $request->input('any_other_forms', []);
        $seizureReport->did_stiffen = $request->input('did_stiffen');
        $seizureReport->loss_of_consciousness = $request->input('loss_of_consciousness');
        $seizureReport->colour_change = $request->input('colour_change');
        $seizureReport->movement = $request->input('movement');

        $user = Auth::user();
        $seizureReport = new SeizureReport($validatedData);
        //Save the operation risk assessment
        $user->seizureReports()->save($seizureReport);
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
