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

        dd($request->all());
       
        $validatedData = $request->validate([
            'assessment_date' => 'required|date',
            'accessors_email_1' => 'required|email',
            'accessors_email_2' => 'required|email',
            'patient_id' => 'required|exists:patients,id', // Assuming "patients" is the patients table name
            'what_causes_harm' => 'required|string',
            'where_is_the_hazard' => 'required|string',
            'who_might_be_harmed' => 'required|string',
            'how_will_they_be_harmed' => 'required|string',
            'how_often_are_exposed_hazard' => 'required|string',
            'how_long_exposed_hazard' => 'required|string',
            'disallowing_activity' => 'required|in:Yes,No',
            'comment' => 'required|string',
            'likelihood_harm' => 'required|in:Unlikely,No,Very Likely',
            'how_serious_harm' => 'required|in:No Injury,Minor Injury,Major Injury,Death',
            'list_of_control_measures' => 'required|string',
            'date_when_control_measures_implemented' => 'required|date',
            'identity_training_required_risk' => 'required|string',
            'identity_training_was_specified' => 'required|date',
            'identity_equipment_reduced_risk' => 'required|string',
            'date_equipment_provided' => 'required|date',
            'likelihood_radio_harm' => 'required|in:Unlikely,No,Very Likely',
            'how_serious_harm_radio' => 'required|in:No Injury,Minor Injury,Major Injury,Death',
            'additional_control_measures' => 'required|string',
            'completion_control_measures' => 'required|date',
            'risk_assessment_drawn_by' => 'required|string',
            'risk_assessment_date' => 'required|date',
            'assessment_taken_mental' => 'required|in:Yes,No',
            'please_comment_any_behaviours' => 'required|string',
            'positive_liberty_issue' => 'required|in:Yes,No',
            'outcome_best_interest_radio' => 'required|in:Yes,No',
            'date_of_review' => 'required|date',
            'changes_required' => 'required|string',
            'managers_name' => 'required|string',
            'risk_assessment_Activity_accessed' => 'required|string',
            'date_of_assessment' => 'required|date',
            'signage_name' => 'required|string',
            'signage_date' => 'required|date',
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
