<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Nurse;
use App\Http\Requests\StoreNurseRequest;
use App\Http\Requests\UpdateNurseRequest;
use Illuminate\Support\Facades\Auth;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function redirect(){
      
        $nurse = Nurse::all();

        if(Auth::user()->usertype=='0') {
            return view('user.home', compact('nurse'));
        }
        elseif(Auth::user()->usertype=='2') {
            return view('accountant.home', compact('nurse'));
        }
        elseif(Auth::user()->usertype=='3') {
            return view('laboratorist.home', compact('nurse'));
        }
        elseif(Auth::user()->usertype=='4') {
            return view('pharmacist.home', compact('nurse'));
        }
        elseif(Auth::user()->usertype=='5') {
            return view('receptionist.home', compact('nurse'));
        }
        elseif(Auth::user()->usertype=='6') {
            return view('doctor.home', compact('nurse'));
        }

        return view('nurse.home', compact('nurse'));
}


public function addview(){

    return view("admin.add_nurse");
}


public function upload(Request $request){

    $nurse = new Nurse();
    $image = $request->file;
    $imagename = time().'.'.$image->getClientOriginalExtension();

    $request->file->move('nurseimage',$imagename);
    $nurse->image=$imagename;

    $nurse->name = $request->name;
    $nurse->phone = $request->number;
   
    $nurse->save();

    return redirect()->back()->with('message','Nurse Added Successfully');

}

public function showNurse(){

    $nurse = Nurse::all();


    return view("admin.showNurse",compact("nurse"));
}

public function deleteNurse($id){

    $nurse=Nurse::find($id);
    $nurse->delete();

    return redirect()->back();
}

public function updateNurse($id){

    $nurse=Nurse::find($id);

    return view('admin.update_nurse',compact("nurse"));
}

public function editNurse(Request $request , $id){

    $nurse =Nurse::find($id);
    $nurse->name = $request->name;
    $nurse->phone = $request->number;
    $image =$request->file;

    if($image){
    $imagename= time().'.'.$image->getClientOriginalExtension();
    
    $request->file->move('nurseimage',$imagename);

    $nurse->image = $imagename;

    }

    $nurse->save();

    return redirect()->back->with('message','Nurse Details updated Successfully');

}

}
