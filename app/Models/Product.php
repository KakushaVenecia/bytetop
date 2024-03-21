<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'model_number',
        'name'
    ];

    public function details()
    {
        return $this->hasMany(Product::class);
    }
}


