<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantitiy',
        'unit_amount',
        'total_amount'
    ];

    public function order (){
        return $this->belongsTo(Order::class);
    }
    public function product (){
        return $this->belongsTo(Product::class);
    }
}
