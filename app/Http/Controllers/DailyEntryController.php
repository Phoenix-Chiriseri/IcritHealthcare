<?php

namespace App\Http\Controllers;

use App\Models\DailyEntry;
use Illuminate\Http\Request;
use Auth;

class DailyEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //dd($request->input("patient_id"));
        // Create a new DailyEntry instance and fill it with the validated data
        $dailyEntry = new DailyEntry();
        $staff_name = Auth::user()->username;
        $house = Auth::user()->house;
        $dailyEntry->fill([
            'staff_name'=>$staff_name,
            'patient_name'=>$request->input("patient_id"),
            'assessment_date' => $request->input('assessment_date'),
            'nhs_number' => $request->input('nhs_number'),
            'user_name_first' => $request->input('user_name_first'),
            'user_name_last' => $request->input('user_name_last'),
            'address_street' => $request->input('address_street'),
            'address_line_2' => $request->input('address_line_2'),
            'address_city' => $request->input('address_city'),
            'address_state' => $request->input('address_state'),
            'address_zip' => $request->input('address_zip'),
            'address_country' => $request->input('address_country'),
            'phone' => $request->input('phone'),
            'communication_language' => $request->input('communication_language'),
            'house'=>$house
            // Add more fields as needed
        ]);
        // Save the entry to the database
        $dailyEntry->save();
        return redirect("/dashboard");

    }

    /**
     * Display the specified resource.
     */
    public function show(DailyEntry $dailyEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DailyEntry $dailyEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DailyEntry $dailyEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DailyEntry $dailyEntry)
    {
        //
    }
}
