<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\Text;

use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Decorations\Block;
use Domain\Product\Models\Category;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Relationships\HasOne;

class CategoryResource extends ModelResource
{

    protected string $model = Category::class;

    protected string $title = 'Категории';

    public function fields(): array
    {
        return [
            Block::make([
                Text::make('Заголовок','title'), 
                Number::make('Порядок сортировки','sort'),
                Switcher::make('Статус', 'status'),
                HasOne::make('Родительская категория', 'parent', resource: new CategoryResource())
                    ->fields([
                        Text::make('Заголовок', 'title'),
                    ]),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

}

