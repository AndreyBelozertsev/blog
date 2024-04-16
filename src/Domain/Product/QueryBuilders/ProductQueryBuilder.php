<?php

namespace Domain\Product\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class ProductQueryBuilder extends Builder
{

    public function activeItem($slug): ProductQueryBuilder
    {
        return $this->active()
            ->where('slug', $slug)
            ->select(['title','slug']);
    }
}
