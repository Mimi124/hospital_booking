<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePrescriptionRequest;
use App\Http\Requests\UpdatePrescriptionRequest;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescription = Prescription::all();
        
        return view('doctor.showPrescription',compact('prescription'));
    }

    public function create()
    {
        return view('doctor.add-prescription')
        ->with('patient',User::patient()->get())
            ->with('doctor',User::doctor()->get());
    }

    public function store(Request $request)
    {

         User::create([
            'patient_id'=>$request->patient,
            'doctor_id'=>$request->doctor,
            'diagnosis' => $request->diagnosis,
            'prescription' => $request->prescription,
            'medicine_instruction' => $request->medicine_instruction,
            'date' => $request->date,
            
        ]);

        // flash message
        session()->flash('success', 'New Prescription Added Successfully.');
        // redirect user
        return redirect()->route('showprescription');
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


    public function showPrescriptions(){

         $prescription = Prescription::all();

        //  $userid = Auth::user()->id;
           
        // $patients=Prescription::where('user_id',$userid)->get();
    
        return view('doctor.showPrescription', compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */

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
