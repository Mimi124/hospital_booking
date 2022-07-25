<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AccountantController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PharmacyController;

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

//Nurses
Route::get('/add_nurse_view',[NurseController::class, 'addview']);
Route::post('/upload_nurse',[NurseController::class, 'upload'])->name('upload_nurse');

Route::get('/showNurse',[NurseController::class, 'showNurse']);

Route::delete('/deleteNurse/{id}',[NurseController::class, 'deleteNurse']);

Route::get('/updateNurse/{id}',[NurseController::class, 'updateNurse']);

Route::post('/editNurse/{id}',[NurseController::class, 'editNurse']);


//ACCOUNTANT
Route::get('/add_accountant_view',[AccountantController::class, 'addview']);
Route::post('/upload_accountant',[AccountantController::class, 'upload'])->name('upload_accountant');

Route::get('/showAccountant',[AccountantController::class, 'showAccountant']);

Route::delete('/deleteAccountant/{id}',[AccountantController::class, 'deleteAccountant']);

Route::get('/updateAccountant/{id}',[AccountantController::class, 'updateAccountant']);

Route::post('/editAccountant/{id}',[AccountantController::class, 'editAccountant']);


//pharmacist
Route::get('/add_pharmacist_view',[PharmacyController::class, 'addview']);
Route::post('/upload_pharmacist',[PharmacyController::class, 'upload'])->name('upload_pharmacist');

Route::get('/showPharmacist',[PharmacyController::class, 'showPharmacist']);

Route::delete('/deletePharmacist/{id}',[PharmacyController::class, 'deletePharmacist']);

Route::get('/updatePharmacist/{id}',[PharmacyController::class, 'updatePharmacist']);

Route::post('/editPharmacist/{id}',[PharmacyController::class, 'editPharmacist']);

















// Route::get('/emailView/{id}',[AppointmentController::class, 'emailView']);

// Route::post('/sendEmail/{id}',[AppointmentController::class, 'sendEmail']);

