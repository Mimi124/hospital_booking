<?php

namespace App\Http\Controllers;

use App\Models\Vital;
use App\Http\Requests\StoreVitalRequest;
use App\Http\Requests\UpdateVitalRequest;
use App\Models\Receptionist;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;

class VitalController extends Controller
{
    public function showPatientVitals(){

        $receptionists = Receptionist::all();
        $patients = Patient::all();
        $doctors = Doctor::where('name', '!=', null)->get();
    
       return view('receptionist.showPatientVitals', compact('receptionists'))
       ->with('patients', $patients)
       ->with('doctors', $doctors);
    }
    
    public function receptionist(Request $request)
    {
        $request->validate([
    
        
            'date'=> 'required|date',
            'blood_pressure'=> 'required|string',
            'body_weight' => 'required|string',
            'temperature' => 'required|string',
            'patient_id' => 'required|sometimes|exists:users,id',
            'doctor_id' => 'sometimes|exists:doctors,id',
         
         ]);
    
         $receptionists = new Receptionist;
    
         $receptionists->date = $request->input('date');
         $receptionists->blood_pressure = $request->input('blood_pressure');
         $receptionists->body_weight = $request->input('body_weight');
         $receptionists->temperature =  $request->input('temperature');
         $receptionists->patient_id = $request->input('patient_id');
         $receptionists->doctor_id = $request->input('doctor_id');
    
    
         $receptionists->save();
    
         return redirect()->back()->with('message','Patient Vitals Added Successfully');
        }

        public function showVitals(){

            $receptionists =  Receptionist::all();
        
            return view('doctor.showVitals', compact('receptionists'));
        }
}
