<?php

namespace App\Http\Controllers;

use App\Models\LiveConsultation;
use App\Http\Requests\StoreLiveConsultationRequest;
use App\Http\Requests\UpdateLiveConsultationRequest;

class LiveConsultationController extends Controller
{
    public function showLiveConsultation(){

        $live_consultations = LiveConsultation::all();
    
        return view('doctor.showLiveConsultation', compact('live_consultations'));
    }

    public function deleteLive_Consultation($id){

        $live_consultations=LiveConsultation::find($id);
        $live_consultations->delete();
    
        return redirect()->back();
    }
    

}
