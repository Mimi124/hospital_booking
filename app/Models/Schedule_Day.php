<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule_Day extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    
    use HasFactory;
}
