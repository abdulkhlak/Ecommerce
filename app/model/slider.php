<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title', 'sub_title', 'image', 'url','start_date','end_date','status',
    ];
}
