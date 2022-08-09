<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;

class DoctorController extends Controller
{
    //
    
    public function redirect(){
      
        $doctor = Doctor::all();

        if(Auth::user()->usertype=='0') {
            return view('user.home', compact('doctor'));
        }
        elseif(Auth::user()->usertype=='2') {
            return view('accountant.home', compact('doctor'));
        }
        elseif(Auth::user()->usertype=='3') {
            return view('laboratorist.home', compact('doctor'));
        }
        elseif(Auth::user()->usertype=='4') {
            return view('pharmacist.home', compact('doctor'));
        }
        elseif(Auth::user()->usertype=='5') {
            return view('receptionist.home', compact('doctor'));
        }

        return view('admin.home', compact('doctor'));

}

public function index(){

    $doctor = Doctor::all();
    // dd($doctor);
    return view('user.home', compact('doctor'));
}

public function addview(){

    return view("admin.add_doctor");
}

public function myDashboard()
{

    return view('user.dashboard.myDashboard');

}



public function upload(Request $request){

    $doctor = new Doctor();
    $image = $request->file;
    $imagename = time().'.'.$image->getClientOriginalExtension();

    $request->file->move('doctorimage',$imagename);
    $doctor->image=$imagename;

    $doctor->name = $request->name;
    $doctor->phone = $request->number;
    $doctor->room = $request->room;
    $doctor->speciality = $request->speciality;

    $doctor->save();

    return redirect()->back()->with('message','Doctor Added Successfully');


}


public function showDoctor(){

    $doctor = Doctor::all();

    //dd($doctor);

    return view("admin.showDoctor",compact("doctor"));
}

public function deleteDoctor($id){

    $doctor=Doctor::find($id);
    $doctor->delete();

    return redirect()->back();
}

public function updateDoctor($id){

    $doctor=Doctor::find($id);

    return view('admin.update_doctor',compact("doctor"));
}

public function editDoctor(Request $request , $id){

    $doctor =Doctor::find($id);
    $doctor->name = $request->name;
    $doctor->phone = $request->number;
    $doctor->speciality = $request->speciality;
    $doctor->room = $request->room;

    $image =$request->file;

    if($image){
    $imagename= time().'.'.$image->getClientOriginalExtension();
    
    $request->file->move('doctorimage',$imagename);

    $doctor->image = $imagename;

    }

    $doctor->save();

    return redirect()->back->with('message','Doctor Details updated Successfully');

}



}
