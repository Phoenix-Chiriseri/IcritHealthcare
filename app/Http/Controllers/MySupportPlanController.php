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
       
        $request->validate([
            'date' => 'required|date',
            'shift' => 'required',
            'patient_id' => 'required|exists:patients,id',
            'personal_care' => 'required',
            'medication_admin' => 'required',
            'appointments' => 'required',
            'activities' => 'required',
            'incident' => 'required',
        ]);
    
        // Create the support plan entry and associate it with the patient
        $supportPlan = new MySupportPlan([
            'date' => $request->date,
            'shift' => $request->shift,
            'patient_id' => $request->patient_id,
            'personal_care' => $request->personal_care,
            'medication_admin' => $request->medication_admin,
            'appointments' => $request->appointments,
            'activities' => $request->activities,
            'incident' => $request->incident,
        ]);
    
        $user = Auth::user();
        $user->supportPlans()->save($supportPlan);
        return back()->with('success', 'Support Plan Added Successfully');      
    }

    public function allSUpportPlans(){

        $usersHouse = Auth::user()->house; 
        $supportPlans = MySupportPlan::leftJoin('patients', 'my_support_plans.patient_id', '=', 'patients.id')
        ->leftJoin('users', 'my_support_plans.user_id', '=', 'users.id')
        ->where('users.house', $usersHouse)
        ->select(
            'users.username as user_name',
            'users.house as house',
            'my_support_plans.shift',
            'my_support_plans.personal_care',
            'my_support_plans.medication_admin',
            'my_support_plans.appointments',
            'my_support_plans.activities',
            'my_support_plans.incident',
            'my_support_plans.created_at',
        )
        ->orderBy('my_support_plans.id', 'desc')
        ->paginate(5);  
        return view('pages.allSupportPlans', compact('supportPlans'))->with("name", Auth::user()->username)->with("house", $usersHouse);
   

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
