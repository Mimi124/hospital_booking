<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabReport;
use App\Models\Patient;
use App\Models\LabTemplate;
use App\Models\Doctor;

class LabReportController extends Controller
{
    public function showLabTest(){

        $labreport = LabReport::all();
        return view("doctor.showLabTest",compact("labreport"));
    }
    
    public function showLabRep(){

        $labreport = LabReport::all();
        return view("user.dashboard.showLabRep",compact("labreport"));
    }

    public function getTemplateById(Request $request){
        if($request->id){
            $labtemplate = LabTemplate::find($request->id);
        }
        return response()->json(['html' => $labtemplate->template]);
    }

    public function index()
    {
        $labreport=LabReport::all();
        $patient = Patient::all();
        $doctor = Doctor::where('name', '!=', null)->get();
        return view('laboratorist.showLabReport',compact('labreport'))
        ->with('patient',$patient)
        ->with('doctor',$doctor);
    }

    public function create()
    {
        
        $patient = Patient::all();
        $doctor = Doctor::where('name', '!=', null)->get();
        return view('laboratorist.add-labreport')
        ->with('patient',$patient)
        ->with('doctor',$doctor)
            ->with('labtemplate',LabTemplate::all());
            //->with('doctor',Doctor::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|sometimes|exists:users,id',  
            'doctor_id' => 'sometimes|exists:doctors,id',          
           ]);
           $labreport = new LabReport;
           $labreport->date = $request->input('date');
           $labreport->time =$request->input('time');
           $labreport->patient_id =$request->input('patient_id');
           $labreport->doctor_id =$request->input('doctor_id');
           $labreport->report = $request->input('report');
        
    
           $labreport->save();
            
        // flash message
        session()->flash('success', 'New Lab Report Added Successfully.');
        // redirect user
        return redirect()->route('showlabreport');
    }

    // public function show(LabReport $labreport)
    // {
    //     return view('lap.lapreports.show')->with('labreport',$labreport);
    // }

    public function update($id)
    {
        $labreport=LabReport::find($id);
        $patient = Patient::all();
        $doctor = Doctor::where('name', '!=', null)->get();
        return view('laboratorist.update-labreport',compact('labreport'))
        ->with('patient',$patient)
        ->with('doctor',$doctor)
            ->with('template',LabTemplate::all());
            //->with('doctor',Doctor::all());
    }

    public function edit(Request $request, $id)
    {
        $labreport=LabReport::find($id);
        $labreport->date=$request->date;
        $labreport->time=$request->time;
        $labreport->patient_id=$request->patient;
        $labreport->doctor_id=$request->doctor;
        $labreport->report=$request->report;

        $labreport->save();
        // flash message
        session()->flash('success', 'Lab Report updated Successfully.');
        // redirect user
        return redirect()->route('showlabreport');
    }

    public function destroy($id)
    {
        $labreport=LabReport::find($id);
        $labreport->delete();
        // flash message
        session()->flash('success', ' Lab Report Deleted Successfully.');
        // redirect user
        return redirect()->route('showlabreport');
    }
    //



}
