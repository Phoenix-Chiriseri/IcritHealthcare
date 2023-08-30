<?php

namespace App\Http\Controllers;

use App\Models\MySupportPlan;
use Illuminate\Http\Request;
use App\Models\Patient;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class MySupportPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //retrieve the patients to the dashboard
        $house = Auth::user()->house;
        $query = "
                select * from patients where house = :house
         ";
        $patients = DB::select($query, ['house' => $house]);
        return view('pages.getMySupportPlan')->with("patients",$patients);
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
       
        dd($request->all());
    }
    /**
     * Display the specified resource.
     */
    public function show(MySupportPlan $mySupportPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MySupportPlan $mySupportPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MySupportPlan $mySupportPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MySupportPlan $mySupportPlan)
    {
        //
    }
}
