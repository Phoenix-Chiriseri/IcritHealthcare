<?php

namespace App\Http\Controllers;

use App\Models\ABCReport;
use Illuminate\Http\Request;

class ABCReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.viewAbcReport');
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
    public function show(ABCReport $aBCReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ABCReport $aBCReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ABCReport $aBCReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ABCReport $aBCReport)
    {
        //
    }
}
