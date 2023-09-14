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
        /*$validatedData = $request->validate([
            'initialsOfPerson' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'influencing_factors' => 'required|string|max:255',
            'what_happened_before_incident' => 'required|string|max:255',
            'behaviors' => 'required|array', // Assuming it's an array
            'what_happened_after_incident' => 'required|string|max:255',
            'immediate_actions' => 'required|string|max:255',
            'done_differently' => 'required|string|max:255',
            'proact_scip_interventions' => 'required|in:Yes,No',
            'medication_administered' => 'required|in:Yes,No',
            'physical_contact_injury_intimidation' => 'required|in:Yes,No',
            // Add validation rules for other fields as needed
        ]);*/
        $abcReport = new AbcReport();
$abcReport->initialsOfPerson = $request->input('initialsOfPerson');
$abcReport->start_time = $request->input('start_time');
$abcReport->end_time = $request->input('end_time');
$abcReport->influencing_factors = $request->input('influencing_factors');
$abcReport->what_happened_before_incident = $request->input('what_happened_before_incident');
$abcReport->behaviors = json_encode($request->input('behaviors', []));
$abcReport->what_happened_after_incident = $request->input('what_happened_after_incident');
$abcReport->immediate_actions = $request->input('immediate_actions');
$abcReport->done_differently = $request->input('done_differently');
$abcReport->proact_scip_interventions = $request->input('proact_scip_interventions');
$abcReport->medication_administered = $request->input('medication_administered');
$abcReport->physical_contact_injury_intimidation = $request->input('physical_contact_injury_intimidation');
        $user = Auth::user();
        
        // Assuming you have a relationship defined between User and ABCReport models
        $user->abcReports()->save($abcReport);
        // If the save operation is successful, return a success response
    // Return an error message to the user
    return back()->with('success', 'Abc Report Saved');

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
