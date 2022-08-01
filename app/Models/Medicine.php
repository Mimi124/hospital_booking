<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'name', 'instruction', 'category_id', 'purchase_price', 'sale_price','quantity', 'company', 'expire_date'
    ];

    public function prescriptions(){
        return $this->belongsToMany(Prescription::class)->withPivot('instructions');
    }

    public function medicine__categories(){
        return $this->belongsTo(MedicineCategory::class);
    }
    
    use HasFactory;
}
