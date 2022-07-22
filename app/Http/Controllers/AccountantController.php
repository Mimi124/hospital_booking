<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Accountant;
use App\Http\Requests\StoreAccountantRequest;
use App\Http\Requests\UpdateAccountantRequest;
use Illuminate\Support\Facades\Auth;

class AccountantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect(){
      
        $accountant = Accountant::all();

        if(Auth::user()->usertype=='0') {
            return view('user.home', compact('accountant'));
        }

        return view('admin.home', compact('accountant'));

}

public function index(){

    $accountant = Accountant::all();
    
    return view('user.home', compact('accountant'));
}

public function addview(){

    return view("admin.add_accountant");
}


public function upload(Request $request){

    $accountant = Accountant::all();
    $image = $request->file;
    $imagename = time().'.'.$image->getClientOriginalExtension();

    $request->file->move('accimage',$imagename);
    $accountant->image=$imagename;

    $accountant->name = $request->name;
    $accountant->phone = $request->number;
   
    $accountant->save();

    return redirect()->back()->with('message','Accountant Added Successfully');

}

public function showAccountant(){

    $accountant = Accountant::all();


    return view("admin.showAccountant",compact("accountant"));
}

public function deleteAccountant($id){

    $accountant=Accountant::find($id);
    $accountant->delete();

    return redirect()->back();
}

public function updateAccountant($id){

    $accountant=Accountant::find($id);

    return view('admin.update_accountant',compact("accountant"));
}

public function editAccountant(Request $request , $id){

    $accountant =Accountant::find($id);
    $accountant->name = $request->name;
    $accountant->phone = $request->number;
    $image =$request->file;

    if($image){
    $imagename= time().'.'.$image->getClientOriginalExtension();
    
    $request->file->move('accimage',$imagename);

    $accountant->image = $imagename;

    }

    $accountant->save();

    return redirect()->back->with('message','Accountant Details updated Successfully');

}
}
