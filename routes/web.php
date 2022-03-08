<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/',[HomeController::class, 'index']);


Route::get('/home',[HomeController::class, 'redirect'])->middleware
('auth','verified');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/add_doctor_view',[AdminController::class, 'addview']);

Route::post('/upload_doctor',[AdminController::class, 'upload'])->name('upload_doctor');
// Route::get('/upload_doctor',[AdminController::class, 'upload'])->name('upload_doctor');

Route::post('/appointment',[HomeController::class, 'appointment'])->name('appointment')->middleware('auth');
// Route::get('/appointment',[HomeController::class, 'appointment'])->name('appointment')->middleware('auth');

Route::get('/myAppointment',[HomeController::class, 'myAppointment'])->middleware('user');

Route::get('/cancel_appointment/{id}',[HomeController::class, 'cancel_appointment']);

Route::get('/showAppointment',[AdminController::class, 'showAppointment']);

Route::get('/approved/{id}',[AdminController::class, 'approved']);

Route::get('/canceled/{id}',[AdminController::class, 'canceled']);

 Route::get('/showDoctor',[AdminController::class, 'showDoctor']);

 Route::delete('/deleteDoctor/{id}',[HomeController::class, 'deleteDoctor']);

 Route::get('/updateDoctor/{id}',[HomeController::class, 'updateDoctor']);

Route::post('/editDoctor/{id}',[HomeController::class, 'editDoctor']);

// Route::get('/emailView/{id}',[HomeController::class, 'emailView']);

Route::get('/patients',[PatientController::class, 'showAllPatients'])->name('showAllPatients');
