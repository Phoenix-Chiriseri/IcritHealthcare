<?php

namespace App\Http\Controllers;

use App\Models\IncidentReport;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class IncidentReportController extends Controller
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
        return view('pages.getIncidentReport')->with("patients",$patients);
    }

    public function viewAllHospitalPassports(){


        return view('pages.viewAllHospitalPassports');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function allIncidentReports()
    {
        // //get the authenticated users house
        $house = Auth::user()->house;
        //select the number of patients database that are based on the users house eg hearten
        $numberOfPatientsInHouse = DB::select("SELECT COUNT(*) AS count FROM patients WHERE house = ?", [$house]);           
        //each and every daily entry is going to display a staff name, patient details and daily entry records. the three tables are daily entry, users and patients. the left join joins the three tables and displays the data in the dashboard....
        $entries = IncidentReport::leftJoin('patients', 'incident_reports.patient_id', '=', 'patients.id')
        ->leftJoin('users', 'incident_reports.user_id', '=', 'users.id')
        ->where('users.house', $house)
        ->select(
            'users.username as user_name',
            'patients.patient_name',
            'incident_reports.ref_number',
            'incident_reports.location',
            'incident_reports.date',
            'incident_reports.time',
            'incident_reports.person_affected',
            'incident_reports.initials',
            'incident_reports.description',
            'incident_reports.identified_causes',
            'incident_reports.completed_forms',
            'incident_reports.name_of_person',
            'incident_reports.date_completed',
            'incident_reports.manager_on_call',

        )
        
        ->orderBy('incident_reports.id', 'desc')
        ->paginate(5); 
        return view("pages.allIncidentReports")->with("entries",$entries);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'patient_id' => 'required',
            'last_name' => 'required',
            'ref_number' => 'required',
            'location' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'person_affected' => 'required',
            'initials' => 'required',
            'description' => 'required',
            'identified_causes' => 'required',
            'completed_forms' => 'required',
            'name_of_person' => 'required',
            'date_completed' => 'required|date',
            'manager_on_call' => 'required',
        ]);
        

        $incidentReport = new IncidentReport([
            'patient_id' => $request->patient_id,
            'last_name' => $request->last_name,
            'ref_number' => $request->ref_number,
            'location' => $request->location,
            'date' => $request->date,
            'time' => $request->time,
            'person_affected' => $request->person_affected,
            'initials' => $request->initials,
            'description' => $request->description,
            'identified_causes' => $request->identified_causes,
            'completed_forms' => $request->completed_forms,
            'name_of_person' => $request->name_of_person,
            'date_completed' => $request->date_completed,
            'manager_on_call' => $request->manager_on_call,
        ]);

        $user = Auth::user();
        //the user is associated with the daily entry. save a daily entry that is associated to the user
        $user->incidentReports()->save($incidentReport);
        //return back to the screen and use sweet alert to show that the data has been saved
        return back()->with('success', 'Incident Report Saved');       
    }

    /**
     * Display the specified resource.
     */
    public function show(IncidentReport $incidentReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IncidentReport $incidentReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IncidentReport $incidentReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncidentReport $incidentReport)
    {
        //
    }
}
