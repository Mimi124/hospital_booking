<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosisCategory extends Model
{
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    
    use HasFactory;
}
