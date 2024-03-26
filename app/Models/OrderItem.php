<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'quantity', 'price', 'status', 'order_identifier'];

    public function product()
    {
        return $this->belongsTo(ProductDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
