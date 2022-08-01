<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $fillable = [
        'patient_id', 'bill_date', 'amount'
    ];

    public function bill_items(){
        return $this->belongsToMany(Bill_Item::class)->withPivot('payment_item_quantity');
    }

    public function patient(){
        return $this->belongsTo(User::class);
    }

    public function doctor(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
