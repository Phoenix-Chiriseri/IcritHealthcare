<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\DailyEntries;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\DailyEntry;

class HomeController extends Controller
{
  
    public function index()
    {
        $userId = Auth::id();
        $username = Auth::user()->username;
        $house = Auth::user()->house;
    
        $query = "
            SELECT users.username as user_name, users.house as house, patients.patient_name, daily_entries.date,
            daily_entries.shift, daily_entries.personal_care, daily_entries.medication_admin,
            daily_entries.appointments, daily_entries.activities, daily_entries.incident
            FROM daily_entries
            LEFT JOIN patients ON daily_entries.patient_id = patients.id
            LEFT JOIN users ON patients.STaff_Id = users.id
            WHERE EXISTS (
                SELECT 1
                FROM patients AS p
                WHERE p.Staff_Id = :userId
                AND p.id = daily_entries.patient_id
            )
        ";
    
        // Execute the raw SQL query with the user ID parameter
        $entries = DB::select($query, ['userId' => $userId]);
        return view('pages.dashboard', compact('entries'))->with("name", $username)->with("house", $house);
    
  }
}
