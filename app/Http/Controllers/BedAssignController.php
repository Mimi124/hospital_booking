<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BedAssign;
use App\Http\Requests\StoreBedAssignRequest;
use App\Http\Requests\UpdateBedAssignRequest;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use App\Models\Bed;
use App\Models\User;

class BedAssignController extends Controller
{
 
    public function index()
    {
        //
    }

  
    public function create()
    {
        //
    }

    public function store(StoreBedAssignRequest $request)
    {
        //
    }

    public function showBedAssign(){

        $bed_assigns = BedAssign::all();
    
        return view('doctor.showBedAssign', compact('bed_assigns'));
    }


    public function showBedAssigned(){

        $patients = User::where('usertype', '=', '0')->get();
        $beds = Bed::where('name', '!=', null)->get();

        $bed_assigns = BedAssign::all();
    
        return view('nurse.showBedAssigned', compact('bed_assigns'))
        ->with('beds', $beds)
        ->with('patients', $patients);
    }

    public function upload(Request $request){

        // $request->validate([
        //     'assigned_date'=> 'required|date',
        //     'discharged_date'=> 'date',
        //     'patient_id' => 'required|exists:patients,name',
        //     'bed_id' => 'sometimes|exists:beds,name',
            
        //     ]);
    
        // // $inputs = $request->all();
        // // print_r($inputs);
        // // exit;

        // BedAssign::create([
        //     'assigned_date' => $request->assigned_date,
        //     'discharged_date' => $request->discharged_date,
        //     'patient_id' => $request->patient_id,
        //     'bed_id' => $request->bed_id,
        //     // 'status' =>'Available',
        // ]);
    
        $request->validate([

        
            'date'=> 'required|date',
            'number' => 'required|numeric',
            'message'=> 'required',
            'doctor_id' => 'sometimes|exists:doctors,id',
         
         ]);
 
        $appointment = new Appointment;
    
        $appointment->date = $request->input('date');
        $appointment->phone = $request->input('number');
        $appointment->message = $request->input('message');
        $appointment->status =  'Pending';
       
        $appointment->user_id = Auth::user()->id;
        $appointment->doctor_id = $request->input('doctor_id');
 
 
        $appointment->save();
    
        return redirect()->back()->with('message','Bed Assigned Added Successfully');
    
    
    }
 
   
}
