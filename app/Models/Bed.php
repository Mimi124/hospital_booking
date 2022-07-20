<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function bed__types(){
        return $this->hasMany(BedAllotment::class);
    }

    use HasFactory;
}
