<?php

namespace App\Http\Controllers;

use App\Models\BehaviouralMonitorChart;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class BehaviouralMonitorChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $house = Auth::user()->house;
        //select all the patients from the table where the house is equal to the hous of the authenticated user
        $patients = DB::select('SELECT * FROM patients WHERE house = ?', [$house]);
        //collect all the patients from the database
        $patients = collect($patients);
        return view('pages.behaviouralMonitorChart')->with("patients",$patients);
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
            'patient_id' => 'required|integer', // Add more validation rules as needed
            'date' => 'required|date',
            'knownBehaviours' => 'required|string',
            'totals' => 'required|string',
            'time' => 'required|time',
            'knownBehaviourReference' => 'required|string',
            'comments' => 'required|string',
            'injuries' => 'required|in:yes,no', // Allow only 'yes' or 'no'
            'initials' => 'required|string',
        ]);

          //Create a new BehaviorChart instance and fill it with validated data
          $behaviorChart = new BehaviorChart();
          $behaviorChart->patient_id = $validatedData['patient_id'];
          $behaviorChart->date = $validatedData['date'];
          $behaviorChart->known_behaviours = $validatedData['knownBehaviours'];
          $behaviorChart->totals = $validatedData['totals'];
          $behaviorChart->time = $validatedData['time'];
          $behaviorChart->known_behaviour_reference = $validatedData['knownBehaviourReference'];
          $behaviorChart->comments = $validatedData['comments'];
          $behaviorChart->injuries = $validatedData['injuries'];
          $behaviorChart->initials = $validatedData['initials'];

          $user = auth()->user();
          $user->behaviouralCharts()->save($behaviourChart);
          return back()->with('success', 'Behaviour Monitor Chart Saved');
    }


    /**
     * Display the specified resource.
     */
    public function show(BehaviouralMonitorChart $behaviouralMonitorChart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BehaviouralMonitorChart $behaviouralMonitorChart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BehaviouralMonitorChart $behaviouralMonitorChart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BehaviouralMonitorChart $behaviouralMonitorChart)
    {
        //
    }
}
