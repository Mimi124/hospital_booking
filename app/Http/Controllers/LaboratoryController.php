<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; 
use App\Http\Requests\StoreLaboratoryRequest;
use App\Http\Requests\UpdateLaboratoryRequest;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect(){
      
        $laboratorist = Laboratory::all();

        if(Auth::user()->usertype=='0') {
            return view('user.home', compact('laboratorist'));
        }
        elseif(Auth::user()->usertype=='1') {
            return view('admin.home', compact('laboratorist'));
        }
        elseif(Auth::user()->usertype=='2') {
            return view('accountant.home', compact('laboratorist'));
        }
        elseif(Auth::user()->usertype=='3') {
            return view('laboratorist.home', compact('laboratorist'));
        }
        elseif(Auth::user()->usertype=='4') {
            return view('pharmacist.home', compact('laboratorist'));
        }
        elseif(Auth::user()->usertype=='5') {
            return view('receptionist.home', compact('laboratorist'));
        }
        elseif(Auth::user()->usertype=='6') {
            return view('doctor.home', compact('laboratorist'));
        }
        elseif(Auth::user()->usertype=='7') {
            return view('nurse.home', compact('laboratorist'));
        }

        return view('laboratorist.home', compact('laboratorist'));

}

public function addview(){

    return view("admin.add_laboratories");
}


public function upload(Request $request){

    $laboratorist = new Laboratory();
    $image = $request->file;
    $imagename = time().'.'.$image->getClientOriginalExtension();

    $request->file->move('labimage',$imagename);
    $laboratorist->image=$imagename;

    $laboratorist->name = $request->name;
    $laboratorist->phone = $request->number;

    $laboratorist->save();

    return redirect()->back()->with('message','Laboratory Added Successfully');


}


public function showLaboratorist(){

    $laboratorist = Laboratory::all();

    return view("admin.ShowLaboratorist",compact("laboratorist"));
}

public function deleteLaboratories($id){

    $laboratorist=Laboratory::find($id);
    $laboratorist->delete();

    return redirect()->back();
}

public function updateLaboratories($id){

    $laboratorist=Laboratory::find($id);

    return view('admin.update_laboratories',compact("laboratorist"));
}

public function editLaboratories(Request $request , $id){

    $laboratorist =Laboratory::find($id);
    $laboratorist->name = $request->name;
    $laboratorist->phone = $request->number;

    $image =$request->file;

    if($image){
    $imagename= time().'.'.$image->getClientOriginalExtension();
    
    $request->file->move('labimage',$imagename);

    $laboratorist->image = $imagename;

    }

    $laboratorist->save();

    return redirect()->back->with('message','Laboratory Details updated Successfully');

}
}
