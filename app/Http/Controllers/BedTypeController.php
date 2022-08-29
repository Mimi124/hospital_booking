<?php

namespace App\Http\Controllers;

use App\Models\BedType;
use App\Http\Requests\StoreBedTypeRequest;
use App\Http\Requests\UpdateBedTypeRequest;
use Illuminate\Http\Request;

class BedTypeController extends Controller
{
    public function showBedTypes(){

        $bed_types = BedType::all();
        return view("nurse.showBedTypes",compact("bed_types"));
    }



   public function upload(Request $request){

    $bed_types = new BedType();
    $bed_types->title = $request->title;
    $bed_types->description = $request->description;

    $bed_types->save();

    return redirect()->back()->with('message','Bed Type Added Successfully');


}

   public function deleteBedType($id){

    $bed_types = BedType::find($id);
    $bed_types->delete();

    return redirect()->back();
}

public function updateBedType($id){

    $bed_types = BedType::find($id);

    return view('nurse.update_bedType',compact("bed_types"));
}

public function editBedType(Request $request , $id){

    $bed_types =BedType::find($id);
    $bed_types->title = $request->title;
    $bed_types->description = $request->description;
  
    $bed_types->save();

    return redirect()->back->with('message','BedType Details updated Successfully');

}

public function showBedType(){

    $bed_types = BedType::all();
    return view("admin.showBedType",compact("bed_types"));
}

}
