<?php

namespace App\Http\Controllers;

use App\Models\FallsCheklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Auth;

class FallsCheklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $house = Auth::user()->house;
        $query = "
                select * from patients where house = :house
         ";
        $patients = DB::select($query, ['house' => $house]);
        return view('pages.getFallsCheckList')->with("patients",$patients);
    }

    public function allFallsChecklists(){

        $usersHouse = Auth::user()->house;
        $checkLists = FallsCheklist::leftJoin('patients', 'falls_cheklists.patient_id', '=', 'patients.id')
            ->leftJoin('users', 'falls_cheklists.user_id', '=', 'users.id')
            ->where('users.house', $usersHouse)
            ->select(
                'users.username as user_name',
                'users.house as house',
                'patients.patient_name as patient_name',
                'falls_cheklists.date', // Fillable field
                'falls_cheklists.incident_ref',
                'falls_cheklists.completed_by',
                'falls_cheklists.completed_by',
                'falls_cheklists.health_concern', // Fillable field
                'falls_cheklists.personal_care', 
                'falls_cheklists.breathing', 
                'falls_cheklists.head_injury', 
                'falls_cheklists.fall_distance', 
                'falls_cheklists.serious_injury_suspected',
                'falls_cheklists.bleeding_or_skin_tear',
                'falls_cheklists.unusual_pain',
                'falls_cheklists.weight_bear',
                'falls_cheklists.weight_bear',
                'falls_cheklists.recommend_attendance',
                'falls_cheklists.use_hoist', // Fillable field
                'falls_cheklists.hoist_not_used_space', // Fillable field
                'falls_cheklists.comments_space', // Fillable field
                'falls_cheklists.hoist_not_used_dignity', // Fillable field
                'falls_cheklists.comments_dignity', // Fillable field
                'falls_cheklists.comments_position', // Fillable field
                'falls_cheklists.comments_other', // Fillable field
                'falls_cheklists.handling_belt_used', // Fillable field
                'falls_cheklists.pain_altered', // Fillable field
                'falls_cheklists.able_to_walk', // Fillable field
                'falls_cheklists.immediate_cause', // Fillable field
                
            )
            ->orderBy('falls_cheklists.id', 'desc')
            ->paginate(5);
            return view('pages.viewAllFallsChecklists')->with("checkLists",$checkLists);
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
        $validatedData = $request->validate([
            'patient_id' => 'required',
            'date' => 'required|date',
            'incident_ref' => 'required',
            'completed_by' => 'required',
            'health_concern' => 'required',
            'personal_care' => 'required',
            'breathing' => 'required',
            'head_injury' => 'required',
            'fall_distance' => 'required',
            'serious_injury_suspected' => 'required',
            'bleeding_or_skin_tear' => 'required',
            'unusual_pain' => 'required',
            'weight_bear' => 'required',
            'recommend_attendance' => 'required',
            'use_hoist' => 'required',
            'hoist_not_used_space' => 'required',
            'comments_space' => 'required',
            'hoist_not_used_dignity' => 'required',
            'comments_dignity' => 'required',
            'comments_position' => 'required',
            'comments_other' => 'required',
            'handling_belt_used' => 'required',
            'comments_belt' => 'required',
            'pain_altered' => 'required',
            'able_to_walk' => 'required',
            'immediate_cause' => 'required',
        ]);

          // Validate the form data
          //$validatedData = $request->validate($validatedData);

          // Create a new Incident model instance and fill it with the form data
          $user = Auth::user();
          //Save the operation risk assessment
          // Create a new SeizureReport instance with validated data
          $user->fallsCheckLists()->create($validatedData);
          // Create a new MedicationIncident instance and fill it with validated data
          // Save the MedicationIncident to the database
          // Optionally, you can redirect to a success page or return a response
          return back()->with('success', 'Falls CheckList Added');
   
        }

    /**
     * Display the specified resource.
     */
    public function show(FallsCheklist $fallsCheklist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FallsCheklist $fallsCheklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FallsCheklist $fallsCheklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FallsCheklist $fallsCheklist)
    {
        //
    }
}
