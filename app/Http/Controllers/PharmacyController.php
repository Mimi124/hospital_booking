<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use Illuminate\Http\Request;
use App\Http\Requests\StorePharmacyRequest;
use App\Http\Requests\UpdatePharmacyRequest;
use Illuminate\Support\Facades\Auth;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect(){
      
        $pharmicist = Pharmacy::all();

        if(Auth::user()->usertype=='0') {
            return view('user.home', compact('pharmacy'));
        }

        return view('admin.home', compact('pharmacy'));

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


    return view("admin.showPharmacist",compact("pharmacist"));
}

public function deletePharmacist($id){

    $pharmacist = Pharmacy::find($id);
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
    
    $request->file->move('pharmacistimage',$imagename);

    $pharmacist->image = $imagename;

    }

    $pharmacist->save();

    return redirect()->back->with('message','Pharmacist Details updated Successfully');

}
}
