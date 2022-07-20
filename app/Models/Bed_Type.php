<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed_Type extends Model
{
    public function bed(){
        return $this->belongsTo(Bed::class);
    }

    public function patient(){
        return $this->belongsTo(User::class);
    }
    
    use HasFactory;
}
