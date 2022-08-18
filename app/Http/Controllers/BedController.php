<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use Illuminate\Http\Request;

class BedController extends Controller
{
    public function showBed(){

        $beds = Bed::all();
        return view("nurse.showBed",compact("beds"));
    }

    
    public function addview(){

    return view("nurse.add_bed")->with('bed_types',[]);
   }

   public function upload(Request $request){

    $request->validate([

           'name'=> 'required|unique:beds,name',
           'charge'=> 'required',
           'bed_types' => 'sometimes|exists:bed_types,title',
        
        ]);

    $beds = new Bed();
    $beds->name = $request->name;
    $beds->charge = $request->charge;
    $beds->bed_types= $request->input('title');

    $beds->save();

    return redirect()->back()->with('message','Bed Added Successfully');


}

   public function deleteBed($id){

    $beds = Bed::find($id);
    $beds->delete();

    return redirect()->back();
}

public function updateBed($id){

    $beds = Bed::find($id);

    return view('nurse.update_bed',compact("beds"));
}

public function editBed(Request $request , $id){

    $beds=Bed::find($id);
    $beds = new Bed();
    $beds->name = $request->name;
    $beds->charge = $request->charge;
    $beds->bed_types = $request->title;
  
    $beds->save();

    return redirect()->back->with('message','Bed Details updated Successfully');

}
}
