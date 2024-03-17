<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductQuantity extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'description',
        'price',
        'tags',
        'category',
        'image',
        'quantity',
        'rating',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

