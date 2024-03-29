<?php

namespace App\Http\Controllers;

use App\Models\LabReport;
use App\Models\LabTemplate;
use App\Models\User;
use Illuminate\Http\Request;

class LabReportAdminController extends Controller
{
    // public function showLabTest(){

    //     $lab_reports = LabReport::all();
    //     return view('laboratorist.showLabReport',compact('labreport'));
    // }


    public function getTemplateById(Request $request){
        if($request->id){
            $labtemplate = LabTemplate::find($request->id);
        }
        return response()->json(['html' => $labtemplate->template]);
    }

    public function index()
    {
        $labreport=LabReport::all();
        return view('admin.showLabReport',compact('labreport'));
    }

    public function create()
    {
        return view('laboratorist.add-labreport')
            ->with('patient',User::patient()->get())
            ->with('labtemplate',LabTemplate::all())
            ->with('doctor',User::doctor()->get());
    }

    public function store(Request $request)
    {
        LabReport::create([
            'date'=>$request->date,
            'time'=>$request->time,
            'patient_id'=>$request->patient,
            'doctor_id'=>$request->doctor,
            'template_id'=>$request->template,
            'report'=>$request->report,
        ]);
        // flash message
        session()->flash('success', 'New Lab Report Added Successfully.');
        // redirect user
        return redirect()->route('showlabreports');
    }

    // public function show(LabReport $labreport)
    // {
    //     return view('lap.lapreports.show')->with('labreport',$labreport);
    // }

    public function update($id)
    {
        $labreport=LabReport::find($id);
        return view('laboratorist.update-labreport',compact('labreport'))
            ->with('patient',User::patient()->get())
            ->with('template',LabTemplate::all())
            ->with('doctor',User::doctor()->get());
    }

    public function edit(Request $request, $id)
    {
        $labreport=LabReport::find($id);
        $labreport->date=$request->date;
        $labreport->time=$request->time;
        $labreport->patient_id=$request->patient;
        $labreport->doctor_id=$request->doctor;
        $labreport->template_id=$request->template;
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
