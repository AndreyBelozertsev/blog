<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;

use MoonShine\Fields\Url;
use Domain\Product\Models\Link;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Relationships\BelongsTo;

class LinkResource extends ModelResource
{
    protected string $model = Link::class;

    protected string $title = 'Ссылки';

    public function fields(): array
    {
        return [
            Block::make([
                Url::make('Ссылка','url')
                    ->required(),
                BelongsTo::make('Ссылка на маркет плейс', 'category', fn($item) => $item->title, new LinkCategoryResource())
                    ->required(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
