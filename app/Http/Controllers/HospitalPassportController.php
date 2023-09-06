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
       $username = Auth::user()->user_name;
       //get the house of the logged in user 
       $house = Auth::user()->house;
       $query = "
              select * from patients where house = :house
       ";
        // Execute the raw SQL query with the user ID parameter
        $patients = DB::select($query, ['house' => $house]);
        return view('pages.getHospitalPassport')->with('patients',$patients);
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
        //
        $validatedData = $request->validate([
            'assessment_date' => 'required|date',
            'staff_email' => 'required|email',
            'patient_id' => 'required|exists:patients,id',
            'likes_to_be_known' => 'required|string',
            'nhs_number' => 'required|string',
            'personal_care' => 'required|in:Yes,No',
            'dob' => 'required|date',
            'address' => 'required|string',
            'city' => 'required|string',
            'county' => 'required|string',
            'phone_number' => 'required|string',
            'how_i_communicate' => 'required|string',
            'family_or_contact_person' => 'required|string',
            'email' => 'required|email',
            'my_support_care_needs' => 'required|string',
            'my_carer_speaks' => 'required|string',
            'thins_to_know' => 'required|string',
            'religious_needs' => 'required|string',
            'ethnicity' => 'required|string',
            'gp_name' => 'required|string',
            'gp_address' => 'required|string',
            'street_address' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'other_services' => 'required|string',
            'social_worker' => 'required|string',
            'allergies' => 'required|string',
            'medical_interventions' => 'required|string',
            'my_medical_histort' => 'required|string',
            'if_im_anxious' => 'required|string',
            'medication_admin' => 'required|string',
            'cardio_vascular' => 'required|in:Yes,No',
            'current_medication' => 'required|string',
            'if_im_in_pain' => 'required|string',
            'moving_around' => 'required|string',
            'personal_care' => 'required|string',
            'problems_with_sight' => 'required|string',
            'how_i_eat' => 'required|string',
            'how_i_drink' => 'required|string',
            'how_i_keep_safe' => 'required|string',
            'how_i_use_the_toilet' => 'required|string',
            'sleeping' => 'required|string',
            'things_i_like' => 'required|string',
            'things_i_dislike' => 'required|string',
            'additional_info' => 'required|string',
        ]);
        // Create a new instance of your model and save the data
        $entry = new YourModel(); // Replace 'YourModel' with the actual model name you are using

        // Map the validated data to your model's attributes
        $entry->fill($validatedData);

        // Save the entry
        $entry->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Form data has been successfully submitted.');
 
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
