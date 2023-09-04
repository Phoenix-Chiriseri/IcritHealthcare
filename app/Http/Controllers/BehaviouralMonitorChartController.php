<?php

namespace App\Http\Controllers;

use App\Models\BehaviouralMonitorChart;
use Illuminate\Http\Request;

class BehaviouralMonitorChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.behaviouralMonitorChart');
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date' => 'required|date',
            'knownBehaviours' => 'required|string|max:255',
            'totals' => 'required|string|max:255',
            'time' => 'required|date_format:H:i',
            'knownBehaviourReference' => 'required|string|max:255',
            'comments' => 'required|string|max:255',
            'injuries' => 'required|in:yes,no',
            'initials' => 'required|string|max:255',
        ]);
    
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
