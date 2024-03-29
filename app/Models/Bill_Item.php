<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill_Item extends Model
{
    protected $fillable = ['item_name', 'billings_id', 'qty', 'price', 'amount'
];
    public function billings(){
        return $this->belongsToMany(Billings::class)->withPivot('payment_item_quantity');
    }

    use HasFactory;
}
