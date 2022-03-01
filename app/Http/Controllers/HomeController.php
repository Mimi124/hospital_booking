<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;






class HomeController extends Controller
{
    //
    public function redirect(){
      
            $doctor = Doctor::all();

            if(Auth::user()->usertype=='0') {
                return view('user.home', compact('doctor'));
            }

            return view('admin.home', compact('doctor'));

    }

    public function index(){

        $doctor = Doctor::all();
        // dd($doctor);
        return view('user.home', compact('doctor'));
    }

    public function appointment(Request $request){

        $data = new Appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status =  'In Progress';
        if(Auth::id())
        {
        $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Appointment Request Successful . We will contact you soon');
        
    }

    public function myAppointment(){

       
            $userid = Auth::user()->id;
            
            $appointments=Appointment::where('user_id',$userid)->get();

            return view('user.my_appointment', compact('appointments'));
    }

    public function cancel_appointment($id){

        $data=Appointment::find($id);

        $data->delete();

        return redirect()->back;


    }
}

