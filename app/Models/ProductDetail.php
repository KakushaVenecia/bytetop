<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = [
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

