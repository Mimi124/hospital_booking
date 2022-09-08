<?php

namespace App\Http\Controllers;

use App\Models\IronTest;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;

class IronTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $irontest=IronTest::all();
        
        $patient = Patient::all();
        $doctor = Doctor::where('name', '!=', null)->get();
        return view('laboratorist.showIronTest',compact('irontest'))
        ->with('patient',$patient)
            ->with('doctor',$doctor);;;
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
        return view('laboratorist.add-irontest')
        ->with('patient',$patient)
            ->with('doctor',$doctor);;
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|sometimes|exists:users,id',  
            'doctor_id' => 'sometimes|exists:doctors,id',          
           ]);

        $irontest = new IronTest;
           $irontest->patient_id =$request->input('patient_id');
           $irontest->doctor_id =$request->input('doctor_id');
           $irontest->iron = $request->input('iron');
           $irontest->tibc = $request->input('tibc');
           $irontest->uibc = $request->input('uibc');
           $irontest->saturation =$request->input('saturation');
           $irontest->ferritin =  $request->input('ferritin');
          
    
           $irontest->save();
            
        
        // flash message
        session()->flash('success', 'New Lab Test Added Successfully.');
        // redirect user
        return redirect()->route('showirontest');
    }

    // public function show(IronTest $irontest)
    // {
    //     return view('lap.laptemplates.show')->with('malaria$irontest',$irontest);
    // }

    public function update($id)
    {
        $irontest=IronTest::find($id);
        return view('laboratorist.update-irontest',compact('irontest'));
    }

    public function edit(Request $request, $id)
    {
        $irontest=IronTest::find($id);
        $irontest->patient_id=$request->patient;
        $irontest->doctor_id=$request->doctor;
        $irontest->iron=$request->iron;
        $irontest->ribc=$request->ribc;
        $irontest->uibc=$request->uibc;
        $irontest->saturation=$request->saturation;
        $irontest->ferritin=$request->ferritin;

        $irontest->save();
        // flash message
        session()->flash('success', 'Lab Test updated Successfully.');
        // redirect user
        return redirect()->route('showirontest');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IronTest  $ironTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(IronTest $ironTest)
    {
        //
    }
}
