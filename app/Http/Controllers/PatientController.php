<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Appointment;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Prescription;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPCases(){
        $prescriptions = Prescription::all();

        return view("user.dashboard.showPCases", compact('prescriptions'));
    }
    

    public function myDashboard()
{

    return view('user.dashboard.myDashboard');

}

  
    public function create()
    {
        //
    }

  
    public function store(StorePatientRequest $request)
    {
        //
    }

    public function showPatients(){

        $appointments = Appointment::all();
    
        return view('doctor.showPatients', compact('appointments'));
    }

   
    public function edit(Patient $patient)
    {
        //
    }

  
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
    }

  
    public function destroy(Patient $patient)
    {
        //
    }
}
