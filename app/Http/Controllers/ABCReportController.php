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
        $validatedData = $request->validate([
            'initialsOfPerson' => 'required|string',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'influencing_factors' => 'required|string',
            'what_happened_before_incident' => 'required|string',
            'behaviors' => 'nullable|array',
            'what_happened_after_incident' => 'required|string',
            'immediateActions' => 'required|string',
            'done_differently' => 'required|string',
            'proact_scip_interventions' => 'required|string|in:Yes,No',
            'medication_administered' => 'required|string|in:Yes,No',
            'physical_contact_injury_intimidation' => 'required|string|in:Yes,No',
            // Add more validation rules for other fields as needed
        ]);

        dd($validatedData);
        
        try {
            $abcReport = new ABCReport($validatedData);
            $user = Auth::user();
            $user->abcReports()->save($abcReport);
        } catch (\Exception $e) {
            var_dump($e->getMessage()); // Output the exception message for debugging
        }
        // Return back to the screen and use sweet alert to show that the data has been saved
        return back()->with('success', 'Report Saved');

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
