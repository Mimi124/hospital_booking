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

        $request->validate([
            'assigned_date'=> 'required|date',
            'discharged_date'=> 'date',
            'patient_id' => 'required|exists:patients,name',
            'bed_id' => 'sometimes|exists:beds,name',             
           ]);
 
        $bed_assigns = new BedAssign;
    
        $bed_assigns->assigned_date = $request->input('date');
        $bed_assigns->discharged_date = $request->input('number');
        $bed_assigns->status =  'Available';
        $bed_assigns->patient_id =$request->input('patient_id');
        $bed_assigns->doctor_id = $request->input('bed_id');
 
        $bed_assigns->save();
    
        return redirect()->back()->with('message','Bed Assigned Added Successfully');
    
    }
 
   
}
