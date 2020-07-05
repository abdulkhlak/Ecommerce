<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    public const ACTIVE_CATEGORY =1;

    // brand protected
    protected $fillable = [
        'category_id', 'subcat_name','subcat_slug', 'status',
    ];
    public function category()
    {
        return $this->belongsTo(categories::class)->select('id','category_name');
    }
}
