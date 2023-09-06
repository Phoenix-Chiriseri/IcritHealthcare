<?php

namespace App\Http\Controllers;

use App\Models\MedicationIncident;
use Illuminate\Http\Request;
use Auth;
use DB;

class MedicationIncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $house = Auth::user()->house;
        //select all the patients from the table where the house is equal to the hous of the authenticated user
        $patients = DB::select('SELECT * FROM patients WHERE house = ?', [$house]);
        //collect all the patients from the database
        $patients = collect($patients);
        return view('pages.getMedicationIncident')->with("patients",$patients);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(MedicationIncident $medicationIncident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedicationIncident $medicationIncident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MedicationIncident $medicationIncident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MedicationIncident $medicationIncident)
    {
        //
    }
}
