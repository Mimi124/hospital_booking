<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AccountantController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicineCategoryController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\BillItemController;
use App\Http\Controllers\LabReportController;

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

Route::get('/',[AccountantController::class, 'index']);

Route::get('/',[PharmacyController::class, 'index']);

Route::get('/',[LaboratoryController::class, 'index']);

Route::get('/',[DoctorController::class, 'index']);


// Route::get('/home',[AccountantController::class, 'redirect'])->middleware
// ('auth','verified');

Route::get('/home',[PharmacyController::class, 'redirect'])->middleware
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

//MEDICINES
// Route::resource('/medicines/categories', 'MedicineCategoryController', ['as' => 'medicines']);
// Route::resource('/medicines', 'MedicineController');

Route::get('/add_medicine_view',[MedicineController::class, 'create']);

Route::get('/showMedicine',[MedicineController::class, 'index'])->name('showmedicine');
Route::get('/add-medicine',[MedicineController::class, 'create']);
Route::post('/upload_medicine',[MedicineController::class, 'store'])->name('upload_medicine');

Route::get('/delete_medicine/{id}',[MedicineController::class, 'destroy'])->name('delete_medicine');
Route::get('/update_medicine/{id}',[MedicineController::class, 'update'])->name('update_medicine');
Route::post('/editMedicine/{id}',[MedicineController::class, 'edit'])->name('editMedicine');

//Medcategory
Route::get('/add_medicinecategory_view',[MedicineCategoryController::class, 'create']);
Route::get('/showMedicineCategories',[MedicineCategoryController::class, 'index'])->name('showmedcategory');
Route::get('/add-medicinecategory',[MedicineCategoryController::class, 'create']);
Route::post('/upload_medicinecategory',[MedicineCategoryController::class, 'store'])->name('upload_medicinecategory');
Route::get('/update_medicinecategory/{id}',[MedicineCategoryController::class, 'update'])->name('update_medicinecategory');
Route::get('/delete_medicinecategory/{id}',[MedicineCategoryController::class, 'destroy'])->name('delete_medicinecategory');
Route::post('/editMedicineCategory/{id}',[MedicineCategoryController::class, 'edit'])->name('editMedicineCategory');

//LabReports
Route::get('/add_labreport_view',[LabReportController::class, 'create']);
Route::get('/showLabReports',[LabReportController::class, 'index'])->name('showlabreport');
Route::get('/add-labreport',[LabReportController::class, 'create']);
Route::post('/upload_labreport',[LabReportController::class, 'store'])->name('upload_labreport');
Route::get('/update_labreport/{id}',[LabReportController::class, 'update'])->name('update_labreport');
Route::get('/delete_labreport/{id}',[LabReportController::class, 'destroy'])->name('delete_labreport');
Route::post('/editLabReport/{id}',[LabReportController::class, 'edit'])->name('editLabReport');


//labtemplates
Route::get('/add_labtemplate_view',[LabTemplateController::class, 'create']);
Route::get('/showLabTemplates',[LabTemplateController::class, 'index'])->name('showlabtemplate');
Route::get('/add-labtemplate',[LabTemplateController::class, 'create']);
Route::post('/upload_labtemplatet',[LabTemplateController::class, 'store'])->name('upload_labtemplate');
Route::get('/update_labtemplate/{id}',[LabTemplateController::class, 'update'])->name('update_labtemplate');
Route::get('/delete_labtemplate/{id}',[LabTemplateController::class, 'destroy'])->name('delete_labtemplate');
Route::post('/editLabTemplate/{id}',[LabTemplateController::class, 'edit'])->name('editLabTemplate');


//billings

Route::get('/add_billing_view',[BillingController::class, 'create']);
Route::get('/showBillings',[BillingController::class, 'index'])->name('showbilling');
Route::get('/add-billing',[BillingController::class, 'create']);
Route::post('/upload_billing',[BillingController::class, 'store'])->name('upload_billing');
Route::get('/update_billing/{id}',[BillingController::class, 'update'])->name('update_billing');
Route::get('/delete_billing/{id}',[BillingController::class, 'destroy'])->name('delete_billing');
Route::post('/editBilling/{id}',[BillingController::class, 'edit'])->name('editBilling');

//billitems
Route::get('/add_billitem_view',[BillItemController::class, 'create']);
Route::get('/showBillItems',[BillItemController::class, 'index'])->name('showbillitem');
Route::get('/add-billitem',[BillItemController::class, 'create']);
Route::post('/upload_billitem',[BillItemController::class, 'store'])->name('upload_billitem');
Route::get('/update_billitem/{id}',[BillItemController::class, 'update'])->name('update_billitem');
Route::get('/delete_billitem/{id}',[BillItemController::class, 'destroy'])->name('delete_billitem');
Route::post('/editbillitem/{id}',[BillItemController::class, 'edit'])->name('editbillitem');

//pharmacist
Route::get('/add_pharmacist_view',[PharmacyController::class, 'addview']);
Route::post('/upload_pharmacist',[PharmacyController::class, 'upload'])->name('upload_pharmacist');

Route::get('/showPharmacist',[PharmacyController::class, 'showPharmacist']);

Route::delete('/deletePharmacist/{id}',[PharmacyController::class, 'deletePharmacist']);

Route::get('/updatePharmacist/{id}',[PharmacyController::class, 'updatePharmacist']);

Route::post('/editPharmacist/{id}',[PharmacyController::class, 'editPharmacist']);

















// Route::get('/emailView/{id}',[AppointmentController::class, 'emailView']);

// Route::post('/sendEmail/{id}',[AppointmentController::class, 'sendEmail']);

