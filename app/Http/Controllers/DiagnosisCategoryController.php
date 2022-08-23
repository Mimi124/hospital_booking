<?php

namespace App\Http\Controllers;

use App\Models\DiagnosisCategory;
use App\Http\Requests\StoreDiagnosisCategoryRequest;
use App\Http\Requests\UpdateDiagnosisCategoryRequest;
use Illuminate\Http\Request;

class DiagnosisCategoryController extends Controller
{
  
    public function addview(){

    return view("doctor.add_diagnosis");
   }

    
    
    public function upload(Request $request){
    
        $diagnosis_categories = new DiagnosisCategory();
       
        $diagnosis_categories->name = $request->name;
        $diagnosis_categories->description = $request->description;

        $diagnosis_categories->save();
        return redirect()->back()->with('message','Diagnosis Category Added Successfully');
    
    
    }

    public function showDiagnosis(){

        $diagnosis_categories = DiagnosisCategory::all();
    
        return view('doctor.showDiagnosis', compact('diagnosis_categories'));
    }

   
public function deleteDiagnosis($id){

    $diagnosis_categories=DiagnosisCategory::find($id);
    $diagnosis_categories->delete();

    return redirect()->back();
}

public function updateDiagnosis($id){

    $diagnosis_categories=DiagnosisCategory::find($id);

    return view('doctor.update_diagnosis',compact("diagnosis_categories"));
}

public function editDiagnosis(Request $request , $id){

    $diagnosis_categories =DiagnosisCategory::find($id);
    $diagnosis_categories->name = $request->name;
    $diagnosis_categories->description = $request->description;


    $diagnosis_categories->save();

    return redirect()->back->with('message','Diagnosis Category updated Successfully');

}

}
