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
        $numberOfPatientsInHouse = DB::select("SELECT COUNT(*) AS count FROM patients WHERE house = ?", [$house]);        
        $entries = DailyEntry::select(
            'users.id AS user_id',
            'users.username AS user_name',
            'users.house AS house',
            'patients.patient_name',
            'daily_entries.date',
            'daily_entries.shift',
            'daily_entries.personal_care',
            'daily_entries.medication_admin',
            'daily_entries.appointments',
            'daily_entries.activities',
            'daily_entries.incident'
        )
            ->leftJoin('patients', 'daily_entries.patient_id', '=', 'patients.id')
            ->leftJoin('users', 'patients.staff_id', '=', 'users.id')
            ->whereExists(function ($query) use ($userId) {
                $query->select(DB::raw(1))
                    ->from('patients AS p')
                    ->whereRaw('p.id = daily_entries.patient_id')
                    ->where('p.staff_id', $userId);
            })
            ->get(); 
        return view('pages.dashboard', compact('entries'))->with("name", $username)->with("house", $house)->with("numberOfPatients",$numberOfPatientsInHouse);
    
  }
}
