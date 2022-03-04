<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;

class AdminController extends Controller
{
    //
    public function addview(){

        return view("admin.add_doctor");
    }


    public function upload(Request $request){

        $doctor = new Doctor();
        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->save('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();

        return redirect()->back()->with('message','Doctor Added Successfully');


    }

    public function showAppointment(){

        $appointments = Appointment::all();

        //dd($appointments);

        return view("admin.showAppointment",compact("appointments"));

    }
    

    public function approved($id)
    {
        $appointment=Appointment::find($id);
        $appointment->status='Approved';
        $appointment->save();

        return redirect()->back();
    }
  

    public function canceled($id)
    {
        $appointment=Appointment::find($id);
        $appointment->status='Canceled';
        $appointment->save();

        return redirect()->back;
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

    // public function emailView($id){

    //     return view('admin.email_view');
    // }
}
