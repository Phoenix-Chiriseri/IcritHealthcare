<?php

namespace App\Http\Controllers;

use App\Models\ComplaintRecord;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class ComplaintRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $house = Auth::user()->house;
        //select all the patients from the table where the house is equal to the hous of the authenticated user
        $patients = DB::select('SELECT * FROM patients WHERE house = ?', [$house]);
        //collect all the patients from the database
        $patients = collect($patients);
        return view('pages.getComplaintRecord')->with("patients",$patients);
    }

    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'patient_id' => 'required|integer',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
            'street_address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'relativeStatus' => 'required|string',
            'detailsOfComplaint' => 'required|string',
            'complaintDescription' => 'required|string',
            'recordedBy' => 'required|string',
            'injuries' => 'required|in:yes,no',
            'complaintDate' => 'required|date',
            'position' => 'required|string',
        ]);

        $complaintRecord = new ComplaintRecord();
        $complaintRecord->phone_number = $request->input('phone_number');
        $complaintRecord->patient_id = $request->input('patient_id');
        $complaintRecord->email = $request->input('email');
        $complaintRecord->address = $request->input('address');
        $complaintRecord->street_address = $request->input('street_address');
        $complaintRecord->city = $request->input('city');
        $complaintRecord->country = $request->input('country');
        $complaintRecord->relative_status = $request->input('relativeStatus');
        $complaintRecord->detailsOfComplaint = $request->input('detailsOfComplaint');
        $complaintRecord->complaintDescription = $request->input('complaintDescription');
        $complaintRecord->recordedBy = $request->input('recordedBy');
        $complaintRecord->complaintDate = $request->input('complaintDate');
        $complaintRecord->position = $request->input('position');
        // Create a new Complaint instance and save it to the database
       //save the behavioural monitor chart
        $user = auth()->user();
        $user->complaintsRecords()->save($complaintRecord);
        return back()->with('success', 'Complaint Recorded Successfully');
     }

     public function allComplaintRecords(){

        $usersHouse = Auth::user()->house;
        $complaintRecords = ComplaintRecord::leftJoin('patients', 'complaint_records.patient_id', '=', 'patients.id')
        ->leftJoin('users', 'complaint_records.user_id', '=', 'users.id')
        ->where('users.house', $usersHouse)
        ->select(
            'users.username as user_name',
            'users.house as house',
            'patients.patient_name as patient_name',
            'complaint_records.phone_number', // Fillable field
            'complaint_records.address', // Fillable field
            'complaint_records.email', // Fillable field
            'complaint_records.street_address', // Fillable field
            'complaint_records.city', // Fillable field
            'complaint_records.country', // Fillable field
            'complaint_records.relative_status', // Fillable field
            'complaint_records.detailsOfComplaint', // Fillable field
            'complaint_records.complaintDescription', // Fillable field
            'complaint_records.recordedBy', // Fillable field
            'complaint_records.injuries', // Fillable field
            'complaint_records.complaintDate', // Fillable field
            'complaint_records.position', // Fillable field
            'complaint_records.created_at'
        )
        ->orderBy('complaint_records.id', 'desc')
        ->paginate(5);
        return view('pages.allComplaintRecords')->with("complaintRecords",$complaintRecords);
    


    }
    /**
     * Display the specified resource.
     */
    public function show(ComplaintRecord $complaintRecord)
    {
        //
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ComplaintRecord $complaintRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ComplaintRecord $complaintRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ComplaintRecord $complaintRecord)
    {
        //
    }
}
