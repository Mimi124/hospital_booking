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

        $appointment = new Appointment;
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->date = $request->date;
        $appointment->phone = $request->number;
        $appointment->doctor = $request->doctor;
        $appointment->message = $request->message;
        $appointment->status =  'In Progress';
        if(Auth::id())
        {
        $appointment->user_id = Auth::user()->id;
        }

        $appointment->save();

        return redirect()->back()->with('message','Appointment Request Successful . We will contact you soon');
        
    }

    public function myAppointment(){

       
            $userid = Auth::user()->id;
            
            $appointments=Appointment::where('user_id',$userid)->get();

            return view('user.my_appointment', compact('appointments'));
    }

    public function cancel_appointment($id){

        $appointment=Appointment::find($id);

        $appointment->delete();

        return redirect()->back()->with('message','Appointment Cancelled Successful .');


    }
}

