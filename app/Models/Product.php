<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'title',
        'price',
        'compare_price',
        'category_id',
        'brand_id',
        'sku',
        'is_featured',
        'qty',
        'description',
        'short_description',
        'status',
    ];
}
