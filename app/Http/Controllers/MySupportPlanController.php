<?php

namespace App\Http\Controllers;

use App\Models\MySupportPlan;
use Illuminate\Http\Request;
use App\Models\Patient;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\MySupportPlans;
use Validator;


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
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validationRules = [
            'date' => 'required|date',
            'patient_id' => 'required|integer|min:1', // Adjust min value as needed
            'comm_skills' => 'required|integer',
            'friend_fam' => 'required|integer',
            'mobility_dexterity' => 'required|integer',
            'routines_personal_care' => 'required|integer',
            'needs' => 'required|integer',
            'emotions' => 'required|integer',
            'daily_living_skills' => 'required|integer',
            'general_health_needs' => 'required|integer',
            'medication_support' => 'required|integer',
            'recreation_and_relation' => 'required|integer',
            'eating_drinking_nutrition' => 'required|integer',
            'psychological_support' => 'required|integer',
            'finance' => 'required|integer',
            'staff_email' => 'required|email',
        ];
        
        $supportPlan = new MySupportPlan();
        $supportPlan->date = request()->input('date');
        $supportPlan->patient_id = request()->input('patient_id');
        $supportPlan->comm_skills = request()->input('comm_skills');
        $supportPlan->friend_fam = request()->input('friend_fam');
        $supportPlan->mobility_dexterity = request()->input('mobility_dexterity');
        $supportPlan->routines_personal_care = request()->input('routines_personal_care');
        $supportPlan->needs = request()->input('needs');
        $supportPlan->emotions = request()->input('emotions');
        $supportPlan->daily_living_skills = request()->input('daily_living_skills');
        $supportPlan->general_health_needs = request()->input('general_health_needs');
        $supportPlan->medication_support = request()->input('medication_support');
        $supportPlan->recreation_and_relation = request()->input('recreation_and_relation');
        $supportPlan->eating_drinking_nutrition = request()->input('eating_drinking_nutrition');
        $supportPlan->psychological_support = request()->input('pSupport');
        $supportPlan->finance = request()->input('finance');
        $supportPlan->staff_email = request()->input('staff_email');
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
