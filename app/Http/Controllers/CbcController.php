<?php

namespace App\Http\Controllers;

use App\Models\Cbc;
use Illuminate\Http\Request;
use App\Models\User;
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
        return view('laboratorist.showCbc',compact('cbc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laboratorist.add-cbc')
        ->with('patient',User::patient()->get())
            ->with('doctor',Doctor::all());;
    }

    public function store(Request $request)
    {
        Cbc::create([
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
