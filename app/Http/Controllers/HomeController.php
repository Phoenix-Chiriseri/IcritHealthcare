<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\DailyEntries;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $username = Auth::user()->username;
        $house = Auth::user()->house;
        $dailyEntries = DB::select("
        SELECT * 
        FROM daily_entries
        WHERE staff_name = :staff_name AND house = :house",
        ['staff_name' => $username, 'house' => $house]);
        /*$dailyEntries = DB::select("
        SELECT * 
        FROM daily_entries where staff_name= :staff_name and house=:house",['staff_name' => $username,'house',$house]);        
        /*$dailyEntries = DB::select("
        SELECT * 
        FROM daily_entries 
        INNER JOIN patients 
        WHERE staff_name = :staff_name ORDER BY daily_entries.id DESC
        ", ['staff_name' => $username]);
        /*$dailyEntries = DB::table('daily_entries')
        ->where('staff_name', '=', $username)
        ->orderBy('id', 'asc') // Replace 'asc' with 'desc' if you want descending order
        ->get();*/

        //$entries = Db::raw(Db::select('select * from daily_entries where staff_name='.$username));
        //$entries = DB::select(DB::raw("SELECT * FROM daily_entries where staff_name=$username"));
        //$dailyEntries = DB::table('daily_entries')
        //->where('staff_name', '=', $username)
        //->get();
        //dd($entries);
        //return the daily entries to the view
        //$entries = DB::table('daily_entries')
          //   ->select(DB::raw('*'))
           //  ->where('staff_name', $username)
             //->get();
        //show only records that pertain to the logged in user.....
        //dd($entries); 
        return view('pages.dashboard')->with("username",$username)->with("house",$house)
        ->with("dailyEntries",$dailyEntries);
    }
}
