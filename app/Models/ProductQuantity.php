<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQuantity extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name', 'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_name', 'name');
    }
}