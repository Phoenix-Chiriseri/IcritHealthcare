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
       
       $validatedData = $request->validate([
        'date' => 'required|date',
        'shift' => 'required',
        'patient_id' => 'required|exists:patients,id',
        'comm_skills' => 'required',
        'friend_fam' => 'required',
        'mobility_dexterity' => 'required',
        'routines_personal_care' => 'required',
        'needs' => 'required',
        'emotions' => 'required',
        'daily_living_skills' => 'required',
        'general_health_needs' => 'required',
        'medication_support' => 'required',
        'recreation_and_relation' => 'required',
        'eating_drinking_nutrition' => 'required',
        'psychological_support' => 'required',
        'finance' => 'required',
        'staff_email' => 'required|email',
       ]); 
        
        // Create the support plan entry and associate it with the patient
        $supportPlan = new MySupportPlan([
            'date' => $request->date,
            'shift' => $request->shift,
            'patient_id' => $request->patient_id,
            'comm_skills' => $request->comm_skills,
            'friend_fam' => $request->friend_fam,
            'mobility_dexterity' => $request->mobility_dexterity,
            'routines_personal_care' => $request->routines_personal_care,
            'needs' => $request->needs,
            'emotions' => $request->emotions,
            'daily_living_skills' => $request->daily_living_skills,
            'general_health_needs' => $request->general_health_needs,
            'medication_support' => $request->medication_support,
            'recreation_and_relation' => $request->recreation_and_relation,
            'eating_drinking_nutrition' => $request->eating_drinking_nutrition,
            'psychological_support' => $request->psychological_support,
            'finance' => $request->finance,
            'staff_email' => $request->staff_email,
        ]);
    
        $supportPlan = new MySupportPlan($validatedData);
        //Associate the support plan with the authenticated user
        $user = Auth::user();
        $user->supportPlans()->save($supportPlan);
        return back()->with('success', 'Support Plan Added Successfully.');  
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
