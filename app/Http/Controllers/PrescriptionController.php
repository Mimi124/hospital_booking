<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePrescriptionRequest;
use App\Http\Requests\UpdatePrescriptionRequest;
use App\Models\Doctor;

class PrescriptionController extends Controller
{

   
    public function showPrescription(){
        $prescriptions = Prescription::all();

        return view("user.dashboard.showPrescription", compact('prescriptions'));

    }
    
    public function show(User $prescription)
    {
        return view('pharmacist.showPrescription')
            ->with('appointments', $prescription->appointments)
            ->with('patient', $prescription->patient)
            ->with('prescription', $prescription);
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

public function prescription(Request $request)
{
    $request->validate([

    
        'date'=> 'required|date',
        'diagnosis'=> 'required|string',
        'prescription' => 'required|string',
        'medicine_instruction' => 'required',
        'patient_id' => 'required|exists:patients,id',
        'doctor_id' => 'sometimes|exists:doctors,id',
     
     ]);

     $prescriptions = new Prescription;

     $prescriptions->date = $request->input('date');
     $prescriptions->diagnosis = $request->input('diagnosis');
     $prescriptions->prescription = $request->input('message');
     $prescriptions->medicine_instruction =  $request->input('medicine_instruction');
     $prescriptions->patient_id = $request->input('patient_id');
     $prescriptions->doctor_id = $request->input('doctor_id');


     $prescriptions->save();

     return redirect()->back()->with('message','Prescription Added Successfully');
    }


    public function showPrescriptions(){

         $prescriptions = Prescription::all();
         $patients = User::where('usertype', '=', '0')->get();
         $doctors = Doctor::where('name', '!=', null)->get();
    
        return view('doctor.showPrescription', compact('prescriptions'))
        ->with('patients', $patients)
        ->with('doctors', $doctors);
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
