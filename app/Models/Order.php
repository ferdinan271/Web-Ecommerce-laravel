<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'grand_total',
        'payment_method',
        'payment_status',
        'status',
        'currency',
        'shiping_amount',
        'shipping_method',
        'notes'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function items(){
        return $this->hasMany(Order_item::class);
    }

    public function address(){
        return $this->hasOne(Address::class);
    }
}

