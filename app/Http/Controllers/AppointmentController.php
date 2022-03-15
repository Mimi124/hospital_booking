<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

// use Notification;
 use App\Notifications\EmailNotification;

class AppointmentController extends Controller
{
    //

    public function showAppointment(){

        $appointments = Appointment::all();

        //dd($appointments);

        return view("admin.showAppointment",compact("appointments"));

    }
    public function appointment(Request $request){

        // 3rd arg -> attribute names
        $request->validate([

        //    'user_name' => 'required',
        //    'user_email' => 'required',
           'date'=> 'required|date',
           'number' => 'required|numeric',
           'message'=> 'required',
           'doctor_id' => 'sometimes|exists:doctors,id',
        
        ]);

       $appointment = new Appointment;
    //    $appointment->user_name = $request->input('user_name');
    //    $appointment->user_email = $request->input('user_email');
       $appointment->date = $request->input('date');
       $appointment->phone = $request->input('number');
       $appointment->message = $request->input('message');
       $appointment->status =  'In Progress';
      
       $appointment->user_id = Auth::user()->id;
       $appointment->doctor_id = $request->input('doctor_id');


       $appointment->save();

       return redirect()->back()->with('message','Appointment Request Successful . We will contact you soon');
       
   }

   public function myAppointment(){

      
           $userid = Auth::user()->id;
           
           $appointments=Appointment::where('user_id',$userid)->get();

           return view('user.my_appointment', compact('appointments'));
   }

   public function cancel_appointment($id){

       $appointment=Appointment::findOrFail($id);

       $appointment->delete();

       return redirect()->back()->with('message','Appointment Cancelled Successfully .');


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

       return redirect()->back()->with('message','Appointment Cancelled Successfully .');
   }

//    public function emailView($id) {

//     $appointment = Appointment::find($id);

//     return view('admin.email_view', compact('appointment'));
// }

//     public function sendEmail(Request $request, $id) {

//         $appointment = Appointment::find($id);
        
//         $details = [

//             'greeting' => $request->greeting,
//             'body' => $request->body,
//             'actionText' => $request->actionText,
//             'actionUrl' => $request->actionUrl
//         ];

//         Notification::send($appointment, new EmailNotification($details));

//         return redirect()->back()->with('message','Email Sent Successfully .');
//     }
}
