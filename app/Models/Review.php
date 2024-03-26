<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['product_detail_id', 'user_id', 'content', 'rating'];

    public function productDetail()
    {
        return $this->belongsTo(ProductDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
