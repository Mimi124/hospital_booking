<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
    protected $fillable = [
        'name', 'email', 'phone','date','message','status'
    ];
    public function doctor()   {
        return  $this->belongsTo(Doctor::class);
     }

     public function user() {
         return $this->belongsTo(User::class);
     }
     
     public function department(){
        return $this->belongsTo(Department::class);
    }
    use HasFactory;

    use Notifiable;
}
