<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public const ACTIVE_CATEGORY =1;

    // brand protected
    protected $fillable = [
        'category_name', 'category_slug', 'status',
    ];
}
