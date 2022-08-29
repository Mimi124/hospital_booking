<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'user_id','payment_method'
      ];

    public function doctor()   {
        return  $this->belongsTo(Doctor::class);
     }

     public function user() {
         return $this->belongsTo(User::class);
     }


     
    use HasFactory;
}
