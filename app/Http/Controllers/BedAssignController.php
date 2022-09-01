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
use Illuminate\Validation\Rule;

class BedAssignController extends Controller
{

    public function showBedAssign(){

        $bed_assigns = BedAssign::all();
    
        return view('doctor.showBedAssign', compact('bed_assigns'));
    }


    public function showBedAssigned(){

        //   $patients = User::where('usertype', '=', '0')->get();
        $patients = Patient::all();

        $beds = Bed::where('name', '!=', null)->get();

        $bed_assigns = BedAssign::all();
    
        return view('nurse.showBedAssigned', compact('bed_assigns'))
        ->with('beds', $beds)
        ->with('patients', $patients);
    }

    public function upload(Request $request){

        // dd($request);

        $request->validate([
            'assign_date'=> 'required|date',
            // 'discharge_date'=> 'date',
            //  'patient_id' => 'sometimes|exists:users,id',
            'patient_id' => 'required|sometimes|exists:users,id',
            'bed_id' => 'sometimes|exists:beds,id',             
           ]);
 
        $bed_assigns = new BedAssign;
    
        $bed_assigns->assign_date = $request->input('assign_date');
        $bed_assigns->discharge_date = $request->input('discharge_date');
        $bed_assigns->status =  'Available';
        $bed_assigns->patient_id =$request->input('patient_id');
        $bed_assigns->bed_id = $request->input('bed_id');
 
        $bed_assigns->save();
      
        return redirect()->back()->with('message','Bed Assigned  Successfully');
    
    }
 
    public function available($id)
    {
        $bed_assigns=BedAssign::find($id);
        $bed_assigns->status='Available';
        $bed_assigns->save();

        return redirect()->back()->with('$bed_assigns');
    }
  
 
    public function occupied($id)
    {
        $bed_assigns=BedAssign::find($id);
        $bed_assigns->status='Occupied';
        $bed_assigns->save();
 
        return redirect()->back()->with('message','Bed Occupied.');
    }
   

    public function showBedsAssign(){

        $bed_assigns = BedAssign::all();
    
        return view('admin.showBedsAssign', compact('bed_assigns'));
    }
}
