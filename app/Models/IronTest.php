<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IronTest extends Model
{
    use HasFactory;
    protected $table = 'iron_test';

    public function doctor(){
        return  $this->belongsTo(Doctor::class);
     }
     public function patient(){
        return $this->belongsTo(Patient::class);
}
}
