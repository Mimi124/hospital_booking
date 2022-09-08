<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MalariaTest extends Model
{
    use HasFactory;
    protected $table = 'malaria_test';

    protected $fillable = [
        'patient_id', 'doctor_id','rbc','rbc_size','wbc','wbc_size','platelets'
    ];

    public function doctor(){
        return  $this->belongsTo(Doctor::class);
     }
     public function patient(){
        return $this->belongsTo(Patient::class);

     }
     
    }     
