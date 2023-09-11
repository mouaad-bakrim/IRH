<?php

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\AbsenceTypesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuditLogController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmployeeCertificationController;
use App\Http\Controllers\EmployeeDashboardController;
use App\Http\Controllers\EmployeeTrainingsController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryAdvanceRequestsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Auth::routes();
Route::get('/index', function () {
    return view('dashboard/change-password');
});
Route::get('/index1', function () {
    return view('dashboard/confirmer1');
});
Route::get('/index4', function () {
    return view('dashboard/finalment');
});
//Route::get('/index', 'HomeController@index')->name('dashboard.confirmer1');

//Route::resource('configuration', ConfigurationController::class);

/************************  change-password  ********************************/
Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/change-password', [UserController::class, 'changePassword'])->name('changePassword');
    Route::post('/change-password', [UserController::class, 'changePasswordSave'])->name('postChangePassword');
});
/************************  fi chane-password  ********************************/



Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'showDashboard']);
});

Route::middleware(['auth', 'role:employee'])->group(function () {
    Route::get('/employee/dashboard', [EmployeeDashboardController::class, 'showDashboard']);
});

Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::get('/manager/dashboard', [ManagerDashboardController::class, 'showDashboard']);
});

Route::post('professions', [ProfessionController::class, 'store'])->name('profession.store');
// routes/web.php


Route::resource('department', DepartmentController::class);
Route::resource('absence', AbsenceController::class);
Route::resource('AbsenceType', AbsenceTypesController::class);
Route::resource('EmployeeCertification', EmployeeCertificationController::class);
Route::resource('EmployeeTrainings', EmployeeTrainingsController::class);
Route::resource('AuditLog', AuditLogController::class);
Route::resource('SalaryAdvanceRequests', SalaryAdvanceRequestsController::class);
Route::post('/upload-image', 'ImageController@uploadImage')->name('uploadImage');

Route::resource('document', DocumentController::class);
Route::resource('Profession', ProfessionController::class);
Route::resource('user', AdminController::class);
Route::resource('employer', AdminController::class);
Route::resource('employer', EmployerController::class);
Route::resource('manager', ManagerController::class);
/*
Route::controller(EmployerController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth')->name('employer.index');
    Route::get('/employer', 'conf')->middleware('auth')->name('employer.confirmer1');
    Route::get('employer/index')->middleware('auth');
    Route::get('dashboard/confirmer1')->middleware('auth');
    Route::get('dashboard/confirmer2')->middleware('auth');
});
*/

Route::get('/index', [LocalizationController::class, 'index']);
Route::get('/change/lang', [LocalizationController::class, 'lang_change'])->name('admin/dashboard');



//Route::get('/', [HomeController::class, 'index'])->name('dashboard.home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard/home');
Route::group(['middleware' => 'superadmin'], function () {
});

//Route::get('/create', 'AdminController@create')->name('manager.create');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('verification.send');


//Route::post('/employer/activate/{id}', [EmployerController::class, 'activate'])->name('employer.activate');
//Route::post('/employer/deactivate/{id}', [EmployerController::class, 'deactivate'])->name('employer.deactivate');
//Route::put('/employer/updateStatus/{id}', [EmployerController::class, 'updateStatus'])->name('employer.updateStatus');

//Route::get('employer', 'EmployerController@index'); // Utilisez "EmployeController" au lieu de "EmployerController"

Route::get('/employer.index', [EmployerController::class, 'index']);
Route::get('/status/update', [EmployerController::class, 'updateStatus'])->name('update.status');
