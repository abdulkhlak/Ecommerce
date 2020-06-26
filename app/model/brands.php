<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    public const ACTIVE_BRAND =1;

    // brand protected
    protected $fillable = [
        'brand_name', 'brand_slug', 'status',
    ];
}
