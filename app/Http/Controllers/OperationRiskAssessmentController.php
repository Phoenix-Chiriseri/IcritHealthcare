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

        $house = Auth::user()->house;
        //select the number of patients database that are based on the users house eg hearten
        $numberOfPatientsInHouse = DB::select("SELECT COUNT(*) AS count FROM patients WHERE house = ?", [$house]);           
        //each and every daily entry is going to display a staff name, patient details and daily entry records. the three tables are daily entry, users and patients. the left join joins the three tables and displays the data in the dashboard....
        $entries = OperationRiskAssessment::leftJoin('patients', 'operation_risk_assessments.patient_id', '=', 'patients.id')
        ->leftJoin('users', 'operation_risk_assessments.user_id', '=', 'users.id')
        ->where('users.house', $house)
        ->select(
            'users.username as user_name',
            'patients.patient_name',
            'operation_risk_assessments.*',
        )
        ->orderBy('operation_risk_assessments.id', 'desc')
        ->paginate(5); 
        return view("pages.allOperationRiskAssessments")->with("entries",$entries);
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
            'patient_id' => 'required|integer',
            'date' => 'required|date',
            'shift' => 'required|string',
            'personal_care' => 'required|string',
            'medication_admin' => 'required|string',
            'appointments' => 'required|string',
            'activities' => 'required|string',
            'incident' => 'required|string',
        ]);

        // Find the authenticated user (assuming you are working with authenticated users)
        $user = auth()->user();

        // Create a new OperationRiskAssessment instance and associate it with the user
        $operationRiskAssessment = new OperationRiskAssessment($validatedData);

        // Save the operation risk assessment
        $user->operationRiskAssessments()->save($operationRiskAssessment);

        // Optionally, you can add a success message or redirect to another page
        return back()->with('success', 'Operation Risk Assessment Saved');
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
