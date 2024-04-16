<?php

namespace Domain\Product\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class CategoryQueryBuilder extends Builder
{

    public function activeItem($slug): CategoryQueryBuilder
    {
        return $this->active()
            ->where('slug', $slug)
            ->select(['title','slug']);
    }
}
