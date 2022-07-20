<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function doctors(){
        return $this->belongsToMany(User::class)->Doctor();
    }

    public function patients(){
        return $this->belongsToMany(User::class)->Patient();
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function beds(){
        return $this->hasMany(Bed::class);
    }
    
    use HasFactory;
}

