<?php

namespace App\Http\Controllers;

use App\Models\MalariaTest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;

class MalariaTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $malariatest=MalariaTest::all();
        return view('laboratorist.showMalariaTest',compact('malariatest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$doctor = Doctor::where('name', '!=', null)->get();
        return view('laboratorist.add-malariatest')
        ->with('patient',User::patient()->get())
            ->with('doctor',Doctor::all());;
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|sometimes|exists:users,id',  
            'doctor_id' => 'sometimes|exists:doctors,id',          
           ]);

        $malariatest = new MalariaTest;
           $malariatest->patient_id =$request->input('patient_id');
           $malariatest->doctor_id =$request->input('doctor_id');
           $malariatest->rbc = $request->input('rbc');
           $malariatest->rbc_size = $request->input('rbc_size');
           $malariatest->wbc =$request->input('wbc');
           $malariatest->wbc_size =  $request->input('wbc_size');
           $malariatest->platelets = $request->input('platelets');
    
           $malariatest->save();
        // flash message
        session()->flash('success', 'New Lab Test Added Successfully.');
        // redirect user
        return redirect()->route('showmalariatest');
    }

    // public function show(MalariaTest $malariatest)
    // {
    //     return view('lap.laptemplates.show')->with('malaria$malariatest',$malariatest);
    // }

    public function update($id)
    {
        $malariatest=MalariaTest::find($id);
        return view('laboratorist.update-malariatest',compact('malariatest'));
    }

    public function edit(Request $request, $id)
    {
        $malariatest=MalariaTest::find($id);
        $malariatest->patient_id=$request->patient;
        $malariatest->doctor_id=$request->doctor;
        $malariatest->rbc=$request->rbc;
        $malariatest->rbc_size=$request->rbc_size;
        $malariatest->wbc=$request->wbc;
        $malariatest->wbc_size=$request->wbc_size;
        $malariatest->platelets=$request->platelets;

        $malariatest->save();
        // flash message
        session()->flash('success', 'Lab Template updated Successfully.');
        // redirect user
        return redirect()->route('showmalariatest');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MalariaTest  $malariaTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(MalariaTest $malariaTest)
    {
        //
    }
}
