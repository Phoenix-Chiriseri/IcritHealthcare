<?php

namespace App\Http\Controllers;

use App\Models\WitnessStatement;
use Illuminate\Http\Request;

class WitnessStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showWitnessStatement(){

        return view("pages.witnessStatement");
    }

    public function viewAllWitnessStatements(){

        return view("pages.viewAllWitnessStatements");
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
    public function show(WitnessStatement $witnessStatement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WitnessStatement $witnessStatement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WitnessStatement $witnessStatement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WitnessStatement $witnessStatement)
    {
        //
    }
}
