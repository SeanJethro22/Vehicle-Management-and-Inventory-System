<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsumptionController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ResponderController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ItemController;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\ProfileController;
>>>>>>> Stashed changes
use App\Http\Controllers\FullCalendarController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'consumptions' => ConsumptionController::class,
    'drivers' => DriverController::class,
    'parts' => PartController::class,
    'patients' => PatientController::class,
    'responders' => ResponderController::class,
    'suppliers' => SupplierController::class,
    'vehicles' => VehicleController::class,
    'others' => OtherController::class,
    'items' => ItemController::class,
]);

  
Route::controller(FullCalendarController::class)->group(function(){
    Route::get('fullcalendar', 'index');
    Route::post('fullcalendarAjax', 'ajax');
});

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');