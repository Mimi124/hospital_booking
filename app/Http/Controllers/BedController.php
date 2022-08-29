<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use Illuminate\Http\Request;
use App\Models\BedType;

class BedController extends Controller
{
    public function showBed(){

        $beds = Bed::all();
         $bedTypes = BedType::where('title', '!=', null)->get();
        return view("nurse.showBed",compact("beds"))->with('bedTypes', $bedTypes);
    }



   public function upload(Request $request){

    $request->validate([
        'name'=> 'required|unique:beds,name',
        'charge'=> 'required',
        // 'bed_type' => 'required|exists:bed_types,id',
        
        ]);

    Bed::create([
        'name' => $request->name,
        'charge' => $request->charge,
        'bed_type' => $request->bed_type,
    ]);
  
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

public function showBeds(){
    $beds=Bed::all();
    return view('admin.showBeds',compact("beds"));
}


}
