<?php

namespace App\Http\Controllers;

use App\Models\IronTest;
use Illuminate\Http\Request;
use App\Models\User;
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
        return view('laboratorist.showIronTest',compact('irontest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laboratorist.add-irontest')
        ->with('patient',User::patient()->get())
            ->with('doctor',Doctor::all());;
    }

    public function store(Request $request)
    {
        IronTest::create([
            'patient_id'=>$request->patient,
            'doctor_id'=>$request->doctor,
            'iron'=>$request->iron,
            'tibc'=>$request->tibc,
            'uibc'=>$request->uibc,
            'saturation'=>$request->saturation,
            'ferittin'=>$request->ferittin,
            
        ]);
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
