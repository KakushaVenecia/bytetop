<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'tags', 'image', 'category', 'user_id', 'quantity'
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

