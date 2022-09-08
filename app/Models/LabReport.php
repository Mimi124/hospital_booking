<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabReport extends Model
{

    protected $fillable = [
        'date','time','patient_id','doctor_id','report'
    ];

    public function labTemplate(){
        return $this->hasOne(LabTemplate::class);
    }

    public function doctor(){
        return  $this->belongsTo(Doctor::class);
     }
     public function patient(){
        return $this->belongsTo(Patient::class);
}

    public function template(){
        return $this->belongsTo(LabTemplate::class);
    }
    use HasFactory;
}
