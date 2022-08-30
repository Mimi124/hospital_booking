<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedAssign extends Model
{
    protected $fillable = [
      'patient_id','bed_id',  'assigned_date','discharged_date','status'
    ];
    public function bed()   {
        return  $this->belongsTo(Bed::class);
     }

     public function patient() {
         return $this->belongsTo(Patient::class);
     }

    use HasFactory;
}
