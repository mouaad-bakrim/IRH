<?php

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmployeeDashboardController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\ProfessionController;
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
Route::resource('document', DocumentController::class);
Route::resource('Profession', ProfessionController::class);
Route::resource('user', AdminController::class);
Route::resource('employer', AdminController::class);
Route::resource('employer', EmployerController::class);
/*
Route::controller(EmployerController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth')->name('employer.index');
    Route::get('/employer', 'conf')->middleware('auth')->name('employer.confirmer1');
    Route::get('employer/index')->middleware('auth');
    Route::get('dashboard/confirmer1')->middleware('auth');
    Route::get('dashboard/confirmer2')->middleware('auth');
});
*/


//Route::get('/', [HomeController::class, 'index'])->name('dashboard.home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard/home');
Route::group(['middleware' => 'superadmin'], function () {
});

//Route::get('/create', 'AdminController@create')->name('manager.create');


Route::get('view', [LanguageController::class, 'view'])->name('view');
Route::get('language-change', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');



