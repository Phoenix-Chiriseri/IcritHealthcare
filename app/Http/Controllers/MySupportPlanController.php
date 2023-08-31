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
        //valudate the data before submission
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

        // Create the support plan entry with validated data
        $supportPlan = new MySupportPlan($validatedData);

        // Associate the support plan with the authenticated user
        // This part assumes you have a relationship set up between the User and MySupportPlan models
        $user = auth()->user();
        $user->supportPlans()->save($supportPlan);
        return back()->with('success', 'Support Plan Added Successfully.');
    }

    public function allSupportPlans(){

        $usersHouse = Auth::user()->house;
        $supportPlans = MySupportPlan::leftJoin('patients', 'my_support_plans.patient_id', '=', 'patients.id')
            ->leftJoin('users', 'my_support_plans.user_id', '=', 'users.id')
            ->where('users.house', $usersHouse)
            ->select(
                'users.username as user_name',
                'users.house as house',
                'patients.patient_name as patient_name',
                'my_support_plans.comm_skills', // Fillable field
                'my_support_plans.friend_fam', // Fillable field
                'my_support_plans.mobility_dexterity', // Fillable field
                'my_support_plans.routines_personal_care', // Fillable field
                'my_support_plans.needs', // Fillable field
                'my_support_plans.emotions', // Fillable field
                'my_support_plans.daily_living_skills', // Fillable field
                'my_support_plans.general_health_needs', // Fillable field
                'my_support_plans.medication_support', // Fillable field
                'my_support_plans.recreation_and_relation', // Fillable field
                'my_support_plans.eating_drinking_nutrition', // Fillable field
                'my_support_plans.psychological_support', // Fillable field
                'my_support_plans.finance', // Fillable field
                'my_support_plans.staff_email', // Fillable field
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
