<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get("appointment", [AppointmentController::class, "appointment"])->name('appointment');
Route::post("appointment", [AppointmentController::class, "appointmented"])->name('appointmented');
Route::get("about", [AppointmentController::class, "about"])->name('about');
Route::get("covid", [AppointmentController::class, "covid"])->name('covid');
Route::get("profile1", [AppointmentController::class, "profile1"])->name('profile1');
Route::get("profile2", [AppointmentController::class, "profile2"])->name('profile2');
Route::get("profile3", [AppointmentController::class, "profile3"])->name('profile3');
Route::get("login", [AppointmentController::class, "login"])->name('login');
Route::post("login", [AppointmentController::class, "verify"])->name('loggedin');
Route::get("logout", [AppointmentController::class, "logout"])->name('logout');
