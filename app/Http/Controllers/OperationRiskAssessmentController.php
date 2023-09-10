<?php

namespace App\Http\Controllers;

use App\Models\OperationRiskAssessment;
use Illuminate\Http\Request;
use Auth;
use DB;

class OperationRiskAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
          //
          $house = Auth::user()->house;
          $query = "
                  select * from patients where house = :house
           ";
          $patients = DB::select($query, ['house' => $house]);
          return view('pages.getOperationsRiskAssessment')->with("patients",$patients);
    }

    public function allOperationRiskAssessments(){

        return view('pages.allOperationRiskAssessments');
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
    public function show(OperationRiskAssessment $operationRiskAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OperationRiskAssessment $operationRiskAssessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OperationRiskAssessment $operationRiskAssessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OperationRiskAssessment $operationRiskAssessment)
    {
        //
    }
}
