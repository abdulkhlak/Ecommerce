<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'cat_id',
        'sub_cat_id',
        'brand_id',
        'product_name',
        'slug',
        'model',
        'color',
        'size',
        'buying_price',
        'selling_price',
        'special_price',
        'special_start',
        'special_end',
        'quantity',
        'warranty',
        'warranty_duration',
        'warranty_condition',
        'video_url',
        'image',
        'galleary',
        'description',
        'long_description',
        'status',
    ];
}
