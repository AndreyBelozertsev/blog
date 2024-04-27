<?php

namespace Domain\Product\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class TgTarifQueryBuilder extends Builder
{

    public function activeItem($slug): TgTarifQueryBuilder
    {
        return $this->active()
            ->where('slug', $slug)
            ->select(['title','slug']);
    }
}
