<?php

namespace Domain\Product\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LinkCategory extends Model
{
    use HasFactory;

    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }
}
