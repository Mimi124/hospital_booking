<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name', 'email', 'phone','date','message','status','user_id'
    ];
    public function doctor()   {
        return  $this->belongsTo(Doctor::class);
     }
     
    use HasFactory;
}
