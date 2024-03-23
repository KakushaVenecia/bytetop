<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Define relationships here if needed
    public function products()
    {
        return $this->hasMany(ProductDetail::class);
    }
}
