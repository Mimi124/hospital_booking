<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePharmacyRequest;
use App\Http\Requests\UpdatePharmacyRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect(){
      
        $pharmacist = Pharmacy::all();

        if(Auth::user()->usertype=='0') {
            return view('user.home', compact('pharmacist'));
        }
        elseif(Auth::user()->usertype=='1') {
            return view('admin.home', compact('pharmacist'));
        }
        elseif(Auth::user()->usertype=='2') {
            return view('accountant.home', compact('pharmacist'));
        }
        elseif(Auth::user()->usertype=='3') {
            return view('laboratorist.home', compact('pharmacist'));
        }
        elseif(Auth::user()->usertype=='5') {
            return view('receptionist.home', compact('pharmacist'));
        }
        elseif(Auth::user()->usertype=='6') {
            return view('doctor.home', compact('pharmacist'));
        }
        elseif(Auth::user()->usertype=='7') {
            return view('nurse.home', compact('pharmacist'));
        }
        return view('pharmacist.home', compact('pharmacist'));

}


public function addview(){

    return view("admin.add_pharmacist");
}


public function upload(Request $request){

    $pharmacist = new Pharmacy();
    $image = $request->file;
    $imagename = time().'.'.$image->getClientOriginalExtension();

    $request->file->move('pharmicistimage',$imagename);
    $pharmacist->image=$imagename;

    $pharmacist->name = $request->name;
    $pharmacist->phone = $request->number;
   
    $pharmacist->save();

    return redirect()->back()->with('message','Pharmacist Added Successfully');


}


public function showPharmacist(){

    $pharmacist = Pharmacy::all();

    //dd($pharmacist);

    return view("admin.showPharmacist",compact("pharmacist"));
}

public function deletePharmacist($id){

    $pharmacist=Pharmacy::find($id);
    $pharmacist->delete();

    return redirect()->back();
}

public function updatePharmacist($id){

    $pharmacist=Pharmacy::find($id);

    return view('admin.update_pharmacist',compact("pharmacist"));
}

public function editPharmacist(Request $request , $id){

    $pharmacist =Pharmacy::find($id);
    $pharmacist->name = $request->name;
    $pharmacist->phone = $request->number;
    $image =$request->file;

    if($image){
    $imagename= time().'.'.$image->getClientOriginalExtension();
    
    $request->file->move('pharmimage',$imagename);

    $pharmacist->image = $imagename;

    }

    $pharmacist->save();

    return redirect()->back->with('message','Pharmacist Details updated Successfully');

}
}
