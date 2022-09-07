<?php

namespace App\Http\Controllers;

use App\Models\DiagnosisCategory;
use App\Http\Requests\StoreDiagnosisCategoryRequest;
use App\Http\Requests\UpdateDiagnosisCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;

class DiagnosisCategoryController extends Controller
{
  
    public function showDiagnose(){

        $diagnosis_categories = DiagnosisCategory::all();
        
        return view('admin.showDiagnose', compact('diagnosis_categories'));
      
    }

    public function index(){

        $diagnosis_categories = DiagnosisCategory::all();
        
        return view('laboratorist.showLabRequest', compact('diagnosis_categories'))
        ->with('patient', User::patient()->get());
      
    }

    
    
    public function upload(Request $request){

        $request->validate([
            'name' =>'required|string',
            'patient_id' => 'required|sometimes|exists:users,id',

        ]);
    
        $diagnosis_categories = new DiagnosisCategory();
       
        $diagnosis_categories->name = $request->name;
        $diagnosis_categories->description = $request->description;
        $diagnosis_categories->patient_id = $request->input('patient_id');
        $diagnosis_categories->labrequest = $request->labrequest;

        $diagnosis_categories->save();
        return redirect()->back()->with('message','Diagnosis Category Added Successfully');
    
    
    }

    public function showDiagnosis(){

        $diagnosis_categories = DiagnosisCategory::all();
        $patients = Patient::all();
        return view('doctor.showDiagnosis', compact('diagnosis_categories'))
        ->with('patients', $patients);;
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
    $diagnosis_categories->labrequest = $request->labrequest;


    $diagnosis_categories->save();

    return redirect()->back->with('message','Diagnosis Category updated Successfully');

}

}
