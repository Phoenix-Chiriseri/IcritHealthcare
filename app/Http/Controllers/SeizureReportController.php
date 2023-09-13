<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\SeizureReport;
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
           /*() $validatedData = $request->validate([
            'ref_number' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'patient_id' => 'required|exists:patients,id', // Assuming 'patients' is the name of your patients table
            'date_of_incident' => 'required|date',
            'time_of_incident' => 'required|date_format:H:i',
            'other_forms_1' => 'array', // Assuming this should be an array
            'other_forms_2' => 'array', // Assuming this should be an array
            'did_fall' => 'required|string|max:255',
            'initials_of_harm' => 'required|string|max:255',
            'incident_description' => 'required|string',
            'any_causes_to_incident' => 'required|string',
            'any_other_forms' => 'array', // Assuming this should be an array
            'did_stiffen' => 'required|string|max:255',
            'loss_of_consciousness' => 'required|string|max:255',
            'colour_change' => 'required|string|max:255',
            'movement' => 'required|string|max:255',
            'breathing_difficulty' => 'required|string|max:255',
            'parts' => 'array', // Assuming this should be an array
            'how_long_seizure' => 'required|string|max:255',
            'yes_incontinence' => 'required|string|max:255',
            'no_incontinence' => 'required|string|max:255',
            'condition_after_seizure' => 'array', // Assuming this should be an array
            'recovery_date' => 'required|string|max:255',
            'person_injury' => 'required|string|max:255',
            'treatment' => 'required|string',
            'triggers' => 'array', // Assuming this should be an array
            'reported_by' => 'required|string|max:255',
            'report_date' => 'required|date',
        ]);*/

       // dd($request->input("conciousness"));
$seizureReport = new SeizureReport();
$seizureReport->ref_number = $request->input('ref_number');
$seizureReport->location = $request->input('location');
$seizureReport->patient_id = $request->input('patient_id');
$seizureReport->date_of_incident = $request->input('date_of_incident');
$seizureReport->time_of_incident = $request->input('time_of_incident');
$seizureReport->other_forms_1 = json_encode($request->input('other_forms_1', []));
$seizureReport->other_forms_2 = json_encode($request->input('other_forms_2', []));
$seizureReport->did_fall = $request->input('did_fall');
$seizureReport->initials_of_harm = $request->input('initials_of_harm');
$seizureReport->incident_description = $request->input('incident_description');
$seizureReport->any_causes_to_incident = $request->input('any_causes_to_incident');
$seizureReport->any_other_forms = json_encode($request->input('any_other_forms', []));
$seizureReport->stiffen = $request->input('stiffen');
$seizureReport->conciousness = $request->input('conciousness');
$seizureReport->color = $request->input('color');
$seizureReport->movement = $request->input('movement');
$seizureReport->breathing = $request->input('breathing');
$seizureReport->parts = json_encode($request->input('parts', []));
$seizureReport->how_long_seizure = $request->input('how_long_seizure');
$seizureReport->incontinence = $request->input('incontinence');
$seizureReport->condition_after_seizure = json_encode($request->input('condition_after_seizure', []));
$seizureReport->recovery_date = $request->input('recovery_date');
$seizureReport->person_injury = $request->input('person_injury');
$seizureReport->treatment = $request->input('treatment');
$seizureReport->triggers = json_encode($request->input('triggers', []));
$seizureReport->reported_by = $request->input('reported_by');
$seizureReport->report_date = $request->input('report_date');
$user = auth()->user();
//Create a new OperationRiskAssessment instance and associate it with the user
$user->seizureReports()->save($seizureReport);
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
