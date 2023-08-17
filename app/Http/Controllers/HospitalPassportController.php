<?php

namespace App\Http\Controllers;

use App\Models\HospitalPassport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Auth;

class HospitalPassportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //get the staff members from the logged in house 
    public function index()
    {
       //get the username based on the logged in user
       $house = Auth::user()->house;
       $query = "
              select * from users where house = :house
       ";
        // Execute the raw SQL query with the user ID parameter
        $users = DB::select($query, ['house' => $house]);
        return view('pages.getHospitalPassport')->with('users',$users);;
    
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
    public function show(HospitalPassport $hospitalPassport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HospitalPassport $hospitalPassport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HospitalPassport $hospitalPassport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HospitalPassport $hospitalPassport)
    {
        //
    }
}
