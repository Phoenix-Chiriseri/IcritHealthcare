<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DailyEntry;

class ApiController extends Controller
{
    //show all daily entries
    public function getAllDailyEntries(){
    
    $entries = DailyEntry::all();
     /*$entries = DailyEntry::leftJoin('patients', 'daily_entries.patient_id', '=', 'patients.id')
     ->leftJoin('users', 'daily_entries.user_id', '=', 'users.id')
     ->select(
         'users.username as user_name',
         'users.house as house',
         'patients.patient_name',
         'daily_entries.date',
         'daily_entries.personal_care',
         'daily_entries.shift',
         'daily_entries.id',
         'daily_entries.medication_admin',
         'daily_entries.activities',
         'daily_entries.incident',
         'daily_entries.appointments'
     )
     ->orderBy('daily_entries.id', 'desc')
     ->paginate(5);  */
      dd($entries);
    }
}
