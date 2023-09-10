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
