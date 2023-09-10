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

    public function viewAllFallsChecklists(){

        return view('pages.viewAllFallsChecklists');
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
        dd($request->all());
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
