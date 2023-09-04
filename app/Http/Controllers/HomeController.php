<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\DailyEntries;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\DailyEntry;
use Carbon\Carbon;

class HomeController extends Controller
{

public function index()
{
    //get the current dateand use carbon to fetch the current date with the locale that is United Kingdom
    $currentDate = Carbon::now('Europe/London')->format('d-m-Y');
    //get the user id of the authenticated user
    $userId = Auth::id();
    //get the username of the authenticated house
    $username = Auth::user()->username;
    //get the house of the authenticated user
    $house = Auth::user()->house;
    //get the number of patients in the house where the house is the house of the authenticatd user
    $numberOfPatientsInHouse = DB::select("SELECT COUNT(*) AS count FROM patients WHERE house = ?", [$house]);
    $query = "
        SELECT users.id AS user_id, users.username AS user_name, users.house AS house,
        patients.patient_name, daily_entries.id as entryId, daily_entries.date, daily_entries.shift,
        daily_entries.personal_care, daily_entries.medication_admin,
        daily_entries.appointments, daily_entries.activities, daily_entries.incident
        FROM daily_entries
        LEFT JOIN patients ON daily_entries.patient_id = patients.id
        LEFT JOIN users ON patients.Staff_Id = users.id
        WHERE EXISTS (
            SELECT 1
            FROM patients AS p
            WHERE p.Staff_Id = :userId
            AND p.id = daily_entries.patient_id
        )
        ORDER BY daily_entries.date DESC
    ";
        $entries = DB::select($query, ['userId' => $userId]);
        return view('pages.dashboard', compact('entries'))->with("name", $username)
            ->with("house", $house)->with("numberOfPatients",$numberOfPatientsInHouse)->with("currentDate",$currentDate);
  }
}
