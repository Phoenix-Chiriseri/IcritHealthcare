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
use App\Http\Controllers\BehaviouralMonitorChartController;
use App\Http\Controllers\FallsCheklistController;
use App\Http\Controllers\HospitalPassportController;
use App\Http\Controllers\IncidentReportController;
use App\Http\Controllers\OperationRiskAssessmentController;
use App\Http\Controllers\PositiveBehaviourSupportPlanController;
use App\Http\Controllers\SelfCertificationSickFormController;
use App\Http\Controllers\MySupportPlanController;
use App\Http\Controllers\SeizureReportController;
use App\Http\Controllers\ComplaintRecordController;
use App\Http\Controllers\Admin;  
use App\Http\Controllers\PdfController;  
use App\Models\DailyEntries;   
use App\Http\Controllers\Admin\AdminAuthController; 
use App\Http\Controllers\StatisticsController; 


/*s
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/   
	Route::get('/registerPatient',[PatientController::class,'index'])->middleware("auth");
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
	Route::get('/getEntry', [DailyEntryController::class, 'createDailyEntry'])->name('getEntry')->middleware("auth");
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	//route for abc report
	Route::get('/getAbcReport', [ABCReportController::class, 'index'])->name('getAbcReport')->middleware('auth');
	Route::post('/saveAbcReport', [ABCReportController::class, 'store'])->name('save-abcReport');
	//
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/saveEntry', [DailyEntryController::class, 'store'])->name('save-entry');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/viewMyPatients', [PatientController::class, 'viewMyPatients'])->name('viewMyPatients')->middleware("auth");
	//behavioural monitor chart routes
	Route::get('getBehaviouralMonitorChart', [BehaviouralMonitorChartController::class, 'index'])->name('getBehaviouralMonitorChart')->middleware('auth');
	Route::get('allBehaviourSupportPlans', [BehaviouralMonitorChartController::class, 'allBehaviouralSupportPlans'])->name('allBehaviourSupportPlans')->middleware('auth');
	Route::post('/save-bChart', [BehaviouralMonitorChartController::class, 'store'])->name('save-bChart');
	Route::get('/getStatistics', [StatisticsController::class, 'index'])->name('getStatistics')->middleware('auth');
	//complaint report routes
	Route::get('getComplaintRecord', [ComplaintRecordController::class, 'index'])->name('getComplaintRecord')->middleware('auth');
	Route::get('allComplaintRecords', [ComplaintRecordController::class, 'allComplaintRecords'])->name('allComplaintRecords')->middleware('auth');
	Route::post('/saveComplaintRecord', [ComplaintRecordController::class, 'store'])->name('save-ComplaintRecord')->middleware("auth");
	//falls checklist routes
	Route::get('/getFallsChecklist', [FallsCheklistController::class, 'index'])->name('getFallsChecklist')->middleware('auth');;
	Route::post('/saveFallsChecklist', [FallsCheklistController::class, 'store'])->name('save-fallsCheckList')->middleware("auth");
	Route::get('/getOperationsRiskAssessment', [OperationRiskAssessmentController::Class, 'index'])->name('getOperationsRiskAssessment')->middleware('auth');
	Route::get('/getPositiveBehaviourSupport', [PositiveBehaviourSupportPlanController::class, 'index'])->name('getPositiveBehaviourSupport')->middleware('auth');
	Route::get('/getSeizureReport', [SeizureReportController::class, 'index'])->name('getSeizureReport')->middleware('auth');
	Route::get('/getSelfCertificationSickForm', [SelfCertificationSickFormController::class, 'index'])->name('getSelfCertificationSickForm')->middleware('auth');
	Route::get('/viewMyProfile', [UserProfileController::class, 'myProfile'])->name('viewMyProfile')->middleware('auth');
	Route::get('/getIncidentReport', [IncidentReportController::class, 'index'])->name('getIncidentReport')->middleware('auth');
	Route::post('/postIncidentReport', [IncidentReportController::class, 'store'])->name('postIncidentReport')->middleware('auth');
	Route::get('/getMySupportPlan', [MySupportPlanController::class, 'index'])->name('getMySuportPlan')->middleware('auth');
	Route::get('/allSupportPlans', [MySupportPlanController::class, 'allSupportPlans'])->name('allSupportPlans')->middleware('auth');
	Route::post('/postMySupportPlan', [MySupportPlanController::class, 'store'])->name('postMySupportPlan')->middleware("auth");
	Route::get('/getHospitalPassport', [HospitalPassportController::class, 'index'])->name('getHospitalPassport')->middleware('auth');;
	Route::get('/viewHouseRecords', [DailyEntryController::class, 'allHouseRecords'])->name("allRecords")->middleware("auth");
	Route::get('/allResults', [UserProfileController::class, 'allResults'])->name("all")->middleware("auth");
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::post('/registerPatient', [PatientController::class, 'create'])->name("registerPatient");
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('/postEntry', [DailyEntryController::class, 'store'])->name('storeEntry')->middleware("auth");
	Route::post('/savePatient', [PatientController::class, 'store'])->name('savePatient')->middleware("auth");	
	Route::get('/generate-pdf/{entryId}', [PdfController::class, 'showGeneratePDF'])->name('generate.pdf')->middleware('auth');
	Route::get('/get/{entryId}', [PdfController::class, 'showGeneratePDF'])->name('generate.pdf')->middleware('auth');
	Route::get('/view-record/{id}', [DailyEntryController::class, 'viewRecordById'])->name('view-record')->middleware("auth");
});