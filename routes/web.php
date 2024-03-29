<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AccountantController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicineCategoryController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\BillItemController;
use App\Http\Controllers\DiagnosisCategoryController;
use App\Http\Controllers\BedAssignController;
use App\Http\Controllers\LabReportController;
use App\Http\Controllers\LabTemplateController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\LiveConsultationController;
use App\Http\Controllers\BedTypeController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\VitalController;

use App\Http\Controllers\LabReportAdminController;
use App\Http\Controllers\MedicineAdminController;

use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\MalariaTestController;
use App\Http\Controllers\CbcController;
use App\Http\Controllers\IronTestController;

use App\Http\Controllers\ReceptionistController;

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

Route::get('/myDashboard',[PatientController::class, 'myDashboard'])->middleware('user');
Route::get('/showPrescription',[PrescriptionController::class, 'showPrescription'])->middleware('user');
Route::get('/showLabRep',[LabReportController::class, 'showLabRep'])->middleware('user');
Route::get('/showPCases',[PatientController::class, 'showPCases'])->middleware('user');
Route::get('/showPayment',[BillingController::class, 'showPayment'])->middleware('user');

Route::get('/cancel_appointment/{id}',[AppointmentController::class, 'cancel_appointment']);

Route::get('/showAppointment',[AppointmentController::class, 'showAppointment']);
Route::get('/showBeds',[BedController::class, 'showBeds']);
Route::get('/showBedType',[BedTypeController::class, 'showBedType']);

Route::get('/showBedsAssign',[BedAssignController::class, 'showBedsAssign']);
Route::get('/showDiagnose',[DiagnosisCategoryController::class, 'showDiagnose']);
// Route::get('/body',[DoctorController::class, 'body']);

//Doctor
Route::get('/approved/{id}',[AppointmentController::class, 'approved']);

Route::get('/canceled/{id}',[AppointmentController::class, 'canceled']);

Route::get('/showDoctor',[DoctorController::class, 'showDoctor']);

Route::delete('/deleteDoctor/{id}',[DoctorController::class, 'deleteDoctor']);

Route::get('/updateDoctor/{id}',[DoctorController::class, 'updateDoctor']);

Route::post('/editDoctor/{id}',[DoctorController::class, 'editDoctor']);

Route::get('/showMyAppointments',[AppointmentController::class, 'showMyAppointments']);
Route::get('/showPatients',[PatientController::class, 'showPatients']);

Route::get('/showBedAssign',[BedAssignController::class, 'showBedAssign']);
Route::get('/showDiagnosis',[DiagnosisCategoryController::class, 'showDiagnosis']);

Route::get('/showPrescriptions',[PrescriptionController::class, 'showPrescriptions']);
Route::post('/upload_prescription',[PrescriptionController::class, 'prescription'])->name('upload_prescription');


Route::get('/showLabRequest',[DiagnosisCategoryController::class, 'index'])->name('showlabrequest');
Route::post('/upload_diagnosis',[DiagnosisCategoryController::class, 'upload'])->name('upload_diagnosis');
Route::delete('/deleteDiagnosis/{id}',[DiagnosisCategoryController::class, 'deleteDiagnosis']);

Route::get('/updateDiagnosis/{id}',[DiagnosisCategoryController::class, 'updateDiagnosis']);

Route::post('/editDiagnosis/{id}',[DiagnosisCategoryController::class, 'editDiagnosis']);

Route::get('/showPayroll',[PayrollController::class, 'showPayroll']);
Route::get('/showLiveConsultation',[LiveConsultationController::class, 'showLiveConsultation']);
Route::delete('/deleteLive_Consultation/{id}',[LiveConsultationController::class, 'deleteLive_Consultation']);
Route::get('/showLabTest',[LabReportController::class, 'showLabTest']);


//Nurses
Route::get('/add_nurse_view',[NurseController::class, 'addview']);
Route::post('/upload_nurse',[NurseController::class, 'upload'])->name('upload_nurse');

Route::get('/showNurse',[NurseController::class, 'showNurse']);

Route::delete('/deleteNurse/{id}',[NurseController::class, 'deleteNurse']);

Route::get('/updateNurse/{id}',[NurseController::class, 'updateNurse']);

Route::post('/editNurse/{id}',[NurseController::class, 'editNurse']);

Route::get('/showMyPayroll',[PayrollController::class, 'showMyPayroll']);



// ======================BedType Nurse section==================================
Route::post('/upload_bedType',[BedTypeController::class, 'upload'])->name('upload_bedType');
Route::get('/showBedTypes',[BedTypeController::class, 'showBedTypes']);

Route::delete('/deleteBedType/{id}',[BedTypeController::class, 'deleteBedType']);
Route::post('/editBedType/{id}',[BedTypeController::class, 'editBedType']);
Route::get('/updateBedType/{id}',[BedTypeController::class, 'updateBedType']);
// ==============================================================================

// ======================Bed Nurse section==================================
Route::post('/upload_bed',[BedController::class, 'upload'])->name('upload_bed');
Route::get('/showBed',[BedController::class, 'showBed']);

Route::delete('/deleteBed/{id}',[BedController::class, 'deleteBed']);
Route::post('/editBed/{id}',[BedController::class, 'editBed']);
Route::get('/updateBed/{id}',[BedController::class, 'updateBed']);
// ==============================================================================


// ================BED ASSIGN======================================================
Route::get('/showBedAssigned',[BedAssignController::class, 'showBedAssigned']);
Route::post('/upload_assignedbed',[BedAssignController::class, 'upload'])->name('upload_assignedbed');

//ACCOUNTANT
Route::get('/add_accountant_view',[AccountantController::class, 'addview']);
Route::post('/upload_accountant',[AccountantController::class, 'upload'])->name('upload_accountant');

Route::get('/showAccountant',[AccountantController::class, 'showAccountant']);

Route::delete('/deleteAccountant/{id}',[AccountantController::class, 'deleteAccountant']);

Route::get('/updateAccountant/{id}',[AccountantController::class, 'updateAccountant']);

Route::post('/editAccountant/{id}',[AccountantController::class, 'editAccountant']);


//LABORATORIST
Route::get('/add_laboratories_view',[LaboratoryController::class, 'addview']);
Route::post('/upload_laboratories',[LaboratoryController::class, 'upload'])->name('upload_accountant');

Route::get('/showLaboratorist',[LaboratoryController::class, 'showLaboratorist']);

Route::delete('/deleteLaboratories/{id}',[LaboratoryController::class, 'deleteLaboratories']);

Route::get('/updateLaboratories/{id}',[LaboratoryController::class, 'updateLaboratories']);

Route::post('/editLaboratories/{id}',[LaboratoryController::class, 'editLaboratories']);


//MEDICINES
// Route::resource('/medicines/categories', 'MedicineCategoryController', ['as' => 'medicines']);
// Route::resource('/medicines', 'MedicineController');

Route::get('/add_medicine_view',[MedicineController::class, 'create']);


Route::get('/showMedicine',[MedicineController::class, 'index'])->name('showmedicine');
Route::get('/showMedicines', [MedicineAdminController::class, 'index'])->name('showmedicines');
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
Route::get('/showLabReport',[LabReportAdminController::class, 'index'])->name('showlabreports');
Route::get('/add-labreport',[LabReportController::class, 'create']);
Route::post('/upload_labreport',[LabReportController::class, 'store'])->name('upload_labreport');
Route::get('/update_labreport/{id}',[LabReportController::class, 'update'])->name('update_labreport');
Route::get('/delete_labreport/{id}',[LabReportController::class, 'destroy'])->name('delete_labreport');
Route::post('/editLabReport/{id}',[LabReportController::class, 'edit'])->name('editLabReport');


//labtemplates
Route::get('/add_labtemplate_view',[LabTemplateController::class, 'create']);
Route::get('/showLabTemplates',[LabTemplateController::class, 'index'])->name('showlabtemplate');
Route::get('/add-labtemplate',[LabTemplateController::class, 'create']);
Route::post('/upload_labtemplate',[LabTemplateController::class, 'store'])->name('upload_labtemplate');
Route::get('/update_labtemplate/{id}',[LabTemplateController::class, 'update'])->name('update_labtemplate');
Route::get('/delete_labtemplate/{id}',[LabTemplateController::class, 'destroy'])->name('delete_labtemplate');
Route::post('/editLabTemplate/{id}',[LabTemplateController::class, 'edit'])->name('editLabTemplate');

Route::get('/add_cbc_view',[CbcController::class, 'create']);
Route::get('/showCbc',[CbcController::class, 'index'])->name('showcbc');
// Route::get('/showcbc',[cbcAdminController::class, 'index'])->name('showcbcs');
Route::get('/add-cbc',[CbcController::class, 'create']);
Route::post('/upload_cbc',[CbcController::class, 'store'])->name('upload_cbc');
Route::get('/update_cbc/{id}',[CbcController::class, 'update'])->name('update_cbc');
Route::get('/delete_cbc/{id}',[CbcController::class, 'destroy'])->name('delete_cbc');
Route::post('/editCbc/{id}',[CbcController::class, 'edit'])->name('editCbc');

Route::get('/add_irontest_view',[IronTestController::class, 'create']);
Route::get('/showIronTests',[IronTestController::class, 'index'])->name('showirontest');
// Route::get('/showirontest',[irontestAdminController::class, 'index'])->name('showirontests');
Route::get('/add-irontest',[IronTestController::class, 'create']);
Route::post('/upload_irontest',[IronTestController::class, 'store'])->name('upload_irontest');
Route::get('/update_irontest/{id}',[IronTestController::class, 'update'])->name('update_irontest');
Route::get('/delete_irontest/{id}',[IronTestController::class, 'destroy'])->name('delete_irontest');
Route::post('/editIronTest/{id}',[IronTestController::class, 'edit'])->name('editIronTest');

Route::get('/add_malariatest_view',[MalariaTestController::class, 'create']);
Route::get('/showMalariaTests',[MalariaTestController::class, 'index'])->name('showmalariatest');
// Route::get('/showmalariatest',[malariatestAdminController::class, 'index'])->name('showmalariatests');
Route::get('/add-malariatest',[MalariaTestController::class, 'create']);
Route::post('/upload_malariatest',[MalariaTestController::class, 'store'])->name('upload_malariatest');
Route::get('/update_malariatest/{id}',[MalariaTestController::class, 'update'])->name('update_malariatest');
Route::get('/delete_malariatest/{id}',[MalariaTestController::class, 'destroy'])->name('delete_malariatest');
Route::post('/editMalariaTest/{id}',[MalariaTestController::class, 'edit'])->name('editMalariaTest');



//billings

Route::get('/add_billing_view',[BillingController::class, 'create']);
Route::get('/showBillings',[BillingController::class, 'index'])->name('showbilling');
Route::get('/add-billing',[BillingController::class, 'create']);
Route::post('/upload_billing',[BillingController::class, 'store'])->name('upload_billing');
Route::get('/update_billing/{id}',[BillingController::class, 'update'])->name('update_billing');
Route::get('/delete_billing/{id}',[BillingController::class, 'destroy'])->name('delete_billing');
Route::post('/editBilling/{id}',[BillingController::class, 'edit'])->name('editBilling');

Route::get('/showInvoice',[BillingController::class, 'showInvoice'])->name('billing');

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
Route::get('/showPres',[PrescriptionController::class, 'showPres']);

Route::delete('/deletePharmacist/{id}',[PharmacyController::class, 'deletePharmacist']);

Route::get('/updatePharmacist/{id}',[PharmacyController::class, 'updatePharmacist']);

Route::post('/editPharmacist/{id}',[PharmacyController::class, 'editPharmacist']);

//receptionist
Route::get('/add_receptionist_view',[ReceptionistController::class, 'addview']);
Route::post('/upload_receptionist',[ReceptionistController::class, 'upload'])->name('upload_receptionist');

Route::get('/showReceptionist',[ReceptionistController::class, 'showReceptionist']);


Route::get('/showPatientVitals',[VitalController::class, 'showPatientVitals']);
Route::get('/showMy_Appointments',[AppointmentController::class, 'showMy_Appointments']);
Route::post('/upload_patientvitals',[VitalController::class, 'receptionist'])->name('upload_patientvitals');
Route::get('/showVitals',[VitalController::class, 'showVitals']);


Route::delete('/deleteReceptionist/{id}',[ReceptionistController::class, 'deleteReceptionist']);

Route::get('/updateReceptionist/{id}',[ReceptionistController::class, 'updateReceptionist']);

Route::post('/editReceptionist/{id}',[ReceptionistController::class, 'editReceptionist']);

//patient

Route::get('/add_patient_view',[PatientController::class, 'addview']);
Route::post('/upload_patient',[PatientController::class, 'upload'])->name('upload_patient');

Route::get('/showPatient',[PatientController::class, 'showPatient']);
// Route::get('/showPatients',[PatientController::class, 'index']);

Route::delete('/deletePatient/{id}',[PatientController::class, 'deletePatient']);

Route::get('/updatePatient/{id}',[PatientController::class, 'updatePatient']);

Route::post('/editPatient/{id}',[PatientController::class, 'editPatient']);

//prescription
Route::get('/update_prescription/{id}',[PrescriptionController::class, 'update'])->name('update_prescription');
Route::get('/delete_prescription/{id}',[PrescriptionController::class, 'destroy'])->name('delete_prescription');
Route::post('/editprescription/{id}',[PrescriptionController::class, 'edit'])->name('editprescription');


