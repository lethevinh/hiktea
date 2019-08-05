<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'title', 'description','content', 'image', 'on_sale',
        'rating', 'sold_count', 'review_count'
    ];

    public function products() {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
