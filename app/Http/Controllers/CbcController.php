<?php

namespace App\Http\Controllers;

use App\Models\Cbc;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;

class CbcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cbc=Cbc::all();
        $patient = Patient::all();
        $doctor = Doctor::where('name', '!=', null)->get();
        return view('laboratorist.showCbc',compact('cbc'))
        ->with('patient',$patient)
            ->with('doctor',$doctor);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        $doctor = Doctor::where('name', '!=', null)->get();
        return view('laboratorist.add-cbc')
        ->with('patient',$patient)
            ->with('doctor',$doctor);;
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|sometimes|exists:users,id',  
            'doctor_id' => 'sometimes|exists:doctors,id',          
           ]);
           $cbc = new Cbc;
           $cbc->patient_id =$request->input('patient_id');
           $cbc->doctor_id =$request->input('doctor_id');
           $cbc->rbc = $request->input('rbc');
           $cbc->wbc =$request->input('wbc');
           $cbc->platelets = $request->input('platelets');
           $cbc->mcv = $request->input('mcv');
           $cbc->mch =  $request->input('mch');
    
           $cbc->save();
            
        
        // flash message
        session()->flash('success', 'New Lab Test Added Successfully.');
        // redirect user
        return redirect()->route('showirontest');
    }

    // public function show(Cbc $cbc)
    // {
    //     return view('lap.laptemplates.show')->with('malaria$cbc',$cbc);
    // }

    public function update($id)
    {
        $cbc=Cbc::find($id);
        return view('laboratorist.update-cbc',compact('cbc'));
    }

    public function edit(Request $request, $id)
    {
        $cbc=Cbc::find($id);
        $cbc->patient_id=$request->patient;
        $cbc->doctor_id=$request->doctor;
        $cbc->rbc=$request->rbc;
        $cbc->wbc=$request->wbc;
        $cbc->platelets=$request->platelets;

        $cbc->save();
        // flash message
        session()->flash('success', 'Lab Test updated Successfully.');
        // redirect user
        return redirect()->route('showirontest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cbc  $cbc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cbc $cbc)
    {
        //
    }
}
