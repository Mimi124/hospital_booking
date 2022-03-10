<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function Login()
    {
        return "I am a Patient";
        $patient_id = Auth::user()->patient_id;
        $patient_id = Patient::where('patient_id', $patient_id)->first();
        return view('Patient.patient-form');
    }


    public function showAllPatients(Request $request) {
        $patients = Patient::all();
        $patients = $request->input('patient_id');        
        return view('patients',['patients' => $patients])
               ->with('patients.list');

    }  
    //
}
