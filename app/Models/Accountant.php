<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accountant extends Model
{
    protected $fillable = [
        'name', 'phone','image'
    ];
    
    use HasFactory;
}
