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
              select * from patients where house = :house";
       
        // Execute the raw SQL query with the user ID parameter
        $patients = DB::select($query, ['house' => $house]);
        return view('pages.getHospitalPassport')->with('patients',$patients);
    }

    public function viewAllHospitalPassports(){

        return view("pages.viewAllHospitalPassports");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
         // Define the validation rules for all form fields
         $validatedData = $request->validate([
            'assessment_date' => 'required|date',
            'staff_email' => 'required|email',
            'patient_id' => 'required|exists:patients,id', // Make sure the patient_id exists in the patients table
            'likes_to_be_known' => 'required|string',
            'nhs_number' => 'required|string',
            'dob' => 'required|date',
            'address' => 'required|string',
            'city' => 'required|string',
            'county' => 'required|string',
            'country' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'my_support_care_needs' => 'required|string',
            'my_carer_speaks' => 'required|string',
            'things_to_know' => 'required|string',
            'religious_needs' => 'required|string',
            'ethnicity' => 'required|string',
            'gp_name' => 'required|string',
            'gp_address' => 'required|string',
            'gp_city' => 'required|string',
            'gp_county' => 'required|string',
            'gp_other_services' => 'required|string',
            'gp_social_worker' => 'required|string',
            'gp_allergies' => 'required|string',
            'gp_medical_interventions' => 'required|string',
            'gp_cardio_vascular' => 'required|string',
            'gp_risk_of_chocking' => 'required|string',
            'gp_current_medication' => 'required|string',
            'gp_mymedicalhistory' => 'required|string',
            'gp_anxious' => 'required|string',
            'how_to_comm' => 'required|string',
            'how_i_medicate' => 'required|string',
            'how_you_know_pain' => 'required|string',
            'moving_around' => 'required|string',
            'person_care' => 'required|string',
            'seeing_hearing' => 'required|string',
            'how_i_eat' => 'required|string',
            'how_i_keep_safe' => 'required|string',
            'how_i_toilet' => 'required|string',
            'sleeping_pattern' => 'required|string',
            'likes' => 'required|string',
            'dislike' => 'required|string',
            'additional_info' => 'required|string',
        ]);

         // Create a new Incident model instance and fill it with the form data
         $user = Auth::user();
         //Save the operation risk assessment
         // Create a new SeizureReport instance with validated data
         $user->hospitalPassports()->create($validatedData);
         // Create a new MedicationIncident instance and fill it with validated data
         // Save the MedicationIncident to the database
         // Optionally, you can redirect to a success page or return a response
         return back()->with('success', 'Hospital Passport Added');
        //return back to the screen and use sweet alert to show that the data has been save
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
