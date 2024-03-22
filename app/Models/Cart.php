<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'name', 'quantity', 'price'];

    // Define relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define relationship with ProductDetail
    public function productDetail()
    {
        return $this->belongsTo(ProductDetail::class, 'name', 'name');
    }

    // Define relationship with Order
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
