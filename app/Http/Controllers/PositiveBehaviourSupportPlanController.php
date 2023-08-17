<?php

namespace App\Http\Controllers;

use App\Models\PositiveBehaviourSupportPlan;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class PositiveBehaviourSupportPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $house = Auth::user()->house;
        $query = "
               select * from users where house = :house
        ";
         // Execute the raw SQL query with the user ID parameter
         $users = DB::select($query, ['house' => $house]);
        return view('pages.getPositiveBehaviourSupport')->with("users",$users);
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
    public function show(PositiveBehaviourSupportPlan $positiveBehaviourSupportPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PositiveBehaviourSupportPlan $positiveBehaviourSupportPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PositiveBehaviourSupportPlan $positiveBehaviourSupportPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PositiveBehaviourSupportPlan $positiveBehaviourSupportPlan)
    {
        //
    }
}
