<?php

namespace Domain\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'link_category_id',
        'product_id',
    ];

    public function category()
    {
        return $this->belongsTo(LinkCategory::class, 'link_category_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Category::class);
    }

}
