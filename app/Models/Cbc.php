<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cbc extends Model
{
    use HasFactory;
    protected $table = 'cbc';

    protected $fillable = [
        'patient_id','doctor_id','rbc','wbc','platelets','mcv','mch'
    ];

    public function doctor(){
        return  $this->belongsTo(Doctor::class);
     }
     public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
