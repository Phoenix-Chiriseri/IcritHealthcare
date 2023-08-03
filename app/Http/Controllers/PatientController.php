<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\User;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*public function index()
    {
        //
        $patients = Patient::all();
        $users = User::all();
        return view("pages.virtualReality")->with("patients",$patients)->with("users",$users);
    }*/
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $patient = new Patient();
        $patient->patient_name = $request->input("patient_name");
        $patient->house = $request->input("house");
        $patient->Staff_Id = $request->input("Staff_Id");
        $patient->save();
        return redirect("/dashboard");
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
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
