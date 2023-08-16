<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword; 
use App\Http\Controllers\DailyEntryController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ABCReportController;
use App\Http\Controllers\Admin;  
use App\Models\DailyEntries;   

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
       
Route::get('/registerPatient',[PatientController::class,'index']);
Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
	Route::group(['middleware' => 'auth'], function () {
	Route::get('/addPatients',[PatientController::class,'index'])->name("patients");
	Route::get('/getEntry', [DailyEntryController::class, 'createDailyEntry'])->name('getEntry');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/saveEntry', [DailyEntryController::class, 'store'])->name('save-entry');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/viewHouseRecords', [DailyEntryController::class, 'allHouseRecords'])->name("allRecords");
	Route::get('/allResults', [UserProfileController::class, 'allResults'])->name("all");
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::post('/registerPatient', [PatientController::class, 'create'])->name("registerPatient");
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('/postEntry', [DailyEntryController::class, 'store'])->name('storeEntry');
	Route::post('/savePatient', [PatientController::class, 'store'])->name('savePatient');	
	Route::get('getAbcEntry', [ABCReportController::class, 'index'])->name('getAbcReport');
});