<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;


use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Domain\Product\Models\LinkCategory;
use Illuminate\Database\Eloquent\Model;

class LinkCategoryResource extends ModelResource
{
    protected string $model = LinkCategory::class;

    protected string $title = 'Типы магазинов';

    public function fields(): array
    {
        return [
            Block::make([
                Text::make('Заголовок','title'), 
                Number::make('Порядок сортировки','sort'),
                
                Switcher::make('Статус', 'status')
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
