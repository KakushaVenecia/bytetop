<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'model_number',
    ];

    public function details()
    {
        return $this->hasMany(ProductQuantity::class);
    }
}


