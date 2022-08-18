<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function bed_types(){
        return $this->hasMany(BedType::class);
    }

    use HasFactory;
    
}
