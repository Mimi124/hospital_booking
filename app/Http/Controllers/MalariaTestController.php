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
        return view('laboratorist.add-malariatest')
        ->with('patient',User::patient()->get())
            ->with('doctor',Doctor::all());;
    }

    public function store(Request $request)
    {
        MalariaTest::create([
            'patient_id'=>$request->patient,
            'doctor_id'=>$request->doctor,
            'rbc'=>$request->rbc,
            'rbc_size'=>$request->rbc_size,
            'wbc'=>$request->wbc,
            'wbc_size'=>$request->wbc_size,
            'platelets'=>$request->platelets,
            
        ]);
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
