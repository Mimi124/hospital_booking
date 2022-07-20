<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine_Category extends Model
{
    
    public function medicines(){
        return $this->hasMany(Medicine::class);
    }
    
    use HasFactory;
}
