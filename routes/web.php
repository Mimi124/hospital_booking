<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[DoctorController::class, 'index']);


Route::get('/home',[DoctorController::class, 'redirect'])->middleware
('auth','verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/add_doctor_view',[DoctorController::class, 'addview']);

Route::post('/upload_doctor',[DoctorController::class, 'upload'])->name('upload_doctor');
// Route::get('/upload_doctor',[AdminController::class, 'upload'])->name('upload_doctor');

Route::post('/appointment',[AppointmentController::class, 'appointment'])->name('appointment')->middleware('auth');
 Route::get('/appointment',[AppointmentController::class, 'appointment'])->name('appointment')->middleware('auth');

Route::get('/myAppointment',[AppointmentController::class, 'myAppointment'])->middleware('user');

Route::get('/cancel_appointment/{id}',[AppointmentController::class, 'cancel_appointment']);

Route::get('/showAppointment',[AppointmentController::class, 'showAppointment']);

Route::get('/approved/{id}',[AppointmentController::class, 'approved']);

Route::get('/canceled/{id}',[AppointmentController::class, 'canceled']);

 Route::get('/showDoctor',[DoctorController::class, 'showDoctor']);

 Route::delete('/deleteDoctor/{id}',[DoctorController::class, 'deleteDoctor']);

 Route::get('/updateDoctor/{id}',[DoctorController::class, 'updateDoctor']);

Route::post('/editDoctor/{id}',[DoctorController::class, 'editDoctor']);

// Route::get('/emailView/{id}',[HomeController::class, 'emailView']);

Route::get('/patients',[PatientController::class, 'showAllPatients'])->name('showAllPatients');
