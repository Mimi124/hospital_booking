<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    protected $fillable = [
        'name',
        'bed_type',
        'description',
        'charge'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function bed_types() {
		return $this->belongsTo(BedType::class,'bed_type');
	}

    use HasFactory;
    
}
