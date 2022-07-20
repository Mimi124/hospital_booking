<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    public function bill__items(){
        return $this->belongsToMany(PaymentItem::class)->withPivot('payment_item_quantity');
    }

    public function patient(){
        return $this->belongsTo(User::class);
    }

    public function doctor(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
