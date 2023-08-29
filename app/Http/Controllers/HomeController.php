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
        $currentDate = Carbon::now('Europe/London')->format('d-m-Y');
$userId = Auth::id();
$username = Auth::user()->username;
$house = Auth::user()->house;
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
        WHERE p.Staff_id = :userId
        AND p.id = daily_entries.patient_id
    )
    ORDER BY daily_entries.date DESC
";

$entries = DB::select($query, ['userId' => $userId]);
return view('pages.dashboard', compact('entries'))->with("name", $username)->with("house", $house)->with("numberOfPatients",$numberOfPatientsInHouse)->with("currentDate",$currentDate);    

}

}
