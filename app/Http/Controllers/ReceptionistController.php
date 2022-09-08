<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Receptionist;
use App\Http\Requests\StoreReceptionistRequest;
use App\Http\Requests\UpdateReceptionistRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Appointment;

class ReceptionistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect(){
      
        $Receptionist = Receptionist::all();

        if(Auth::user()->usertype=='0') {
            return view('user.home', compact('receptionist'));
        }
        elseif(Auth::user()->usertype=='1') {
            return view('admin.home', compact('receptionist'));
        }
        elseif(Auth::user()->usertype=='3') {
            return view('laboratorist.home', compact('receptionist'));
        }
        elseif(Auth::user()->usertype=='4') {
            return view('pharmacist.home', compact('receptionist'));
        }
        elseif(Auth::user()->usertype=='2') {
            return view('accountant.home', compact('receptionist'));
        }
        elseif(Auth::user()->usertype=='6') {
            return view('doctor.home', compact('receptionist'));
        }
        elseif(Auth::user()->usertype=='7') {
            return view('nurse.home', compact('receptionist'));
        }

        return view('Receptionist.home', compact('receptionist'));

}



   
public function addview(){

    return view("admin.add_Receptionist");
}


public function upload(Request $request){

    $receptionist = Receptionist::all();
    $image = $request->file;
    $imagename = time().'.'.$image->getClientOriginalExtension();

    $request->file->move('recimage',$imagename);
    $receptionist->image=$imagename;

    $receptionist->name = $request->name;
    $receptionist->phone = $request->number;
   
    $receptionist->save();

    return redirect()->back()->with('message','Receptionist Added Successfully');

}

public function showReceptionist(){

    $Receptionist = Receptionist::all();


    return view("admin.showReceptionist",compact("receptionist"));
}

public function deleteReceptionist($id){

    $receptionist=Receptionist::find($id);
    $receptionist->delete();

    return redirect()->back();
}

public function updateReceptionist($id){

    $receptionist=Receptionist::find($id);

    return view('admin.update_Receptionist',compact("receptionist"));
}

public function editReceptionist(Request $request , $id){

    $receptionist =Receptionist::find($id);
    $receptionist->name = $request->name;
    $receptionist->phone = $request->number;
    $image =$request->file;

    if($image){
    $imagename= time().'.'.$image->getClientOriginalExtension();
    
    $request->file->move('recimage',$imagename);

    $receptionist->image = $imagename;

    }

    $receptionist->save();

    return redirect()->back->with('message','Receptionist Details updated Successfully');

}
}
