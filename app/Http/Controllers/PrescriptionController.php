<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePrescriptionRequest;
use App\Http\Requests\UpdatePrescriptionRequest;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Validation\Rule;

class PrescriptionController extends Controller
{

   
    public function showPrescription(){
        $prescriptions = Prescription::all();

        return view("user.dashboard.showPrescription", compact('prescriptions'));

    }
    
  
    public function showPres(){
        $prescriptions = Prescription::all();

        return view("pharmacist.showPres", compact('prescriptions'));

    }
    public function update($id)
    {
        $prescription=Prescription::find($id);
        return view('doctor.update-prescription',compact('prescription'));
    }

    public function edit(Request $request, $id)
    {

        $prescription=Prescription::find($id);
        $prescription->patient_id=$request->patient;
        $prescription->doctor_id=$request->doctor;
        $prescription->diagnosis=$request->diagnosis;
        $prescription->prescription=$request->prescription;
        $prescription->medicine_instruction=$request->medicine_instruction;
        $prescription->date=$request->date;
        

        $prescription->save();
        // flash message
        session()->flash('success', ' Prescription Updated Successfully.');
        // redirect user
        return redirect()->route('showprescription');
    }


    public function myDashboard()
{

    return view('user.dashboard.myDashboard');

}

public function showPrescriptions(){

    $prescriptions = Prescription::all();
      $patients = Patient::all();
    // $patients = Patient::query()
    // ->join('users', 'users.id', 'patients.user_id') // join to get `name` from users table
    // ->pluck('users.name', 'patients.id');
    $doctors = Doctor::where('name', '!=', null)->get();

   return view('doctor.showPrescription', compact('prescriptions'))
   ->with('patients', $patients)
   ->with('doctors', $doctors);
// ->with('doctors',Doctor::all());
}


public function prescription(Request $request)
{

    // dd($request->input());
    $request->validate([

    
        'date'=> 'required|date',
        'diagnosis'=> 'required|string',
        'prescription' => 'required|string',
        'medicine_instruction' => 'required',
         'patient_id' => 'required|sometimes|exists:users,id',
        // 'patient_id' => 'required|exists:patients,id',
        // 'patient_id' => ['required', Rule::exists('patients', 'id')],
        'doctor_id' => 'sometimes|exists:doctors,id',
     
     ]);

     $prescriptions = new Prescription;

     $prescriptions->date = $request->input('date');
     $prescriptions->diagnosis = $request->input('diagnosis');
     $prescriptions->prescription = $request->input('prescription');
     $prescriptions->medicine_instruction =  $request->input('medicine_instruction');
     $prescriptions->patient_id = $request->input('patient_id');
     $prescriptions->doctor_id = $request->input('doctor_id');


     $prescriptions->save();

     return redirect()->back()->with('message','Prescription Added Successfully');
    }


  
    public function destroy($id)
    {
        $prescription=Prescription::find($id);
        $prescription->delete();
        // flash message
        session()->flash('success', ' Prescription Deleted Successfully.');
        // redirect user
        return redirect()->route('showpatient');
    }
    
  
}
