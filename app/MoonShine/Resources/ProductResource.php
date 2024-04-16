<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;


use MoonShine\Fields\Text;
use Illuminate\Support\Str;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Block;
use Illuminate\Http\UploadedFile;
use Domain\Product\Models\Product;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Relationships\BelongsTo;
use Illuminate\Contracts\Database\Eloquent\Builder; 
use Domain\Product\QueryBuilders\CategoryQueryBuilder;

class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Товары';

    public function fields(): array
    {
        return [
            Block::make([
                Text::make('Заголовок','title')
                    ->required(), 
                Image::make('Обложка','thumbnail') 
                    ->hideOnIndex()
                    ->customName(function (UploadedFile $file, Image $field){
                    return getUploadPath('product') . '/' . Str::random(10) . '.' . $file->extension();
                })
                    ->allowedExtensions(['jpeg','png','jpg','gif','svg']),
                Text::make('Цена','price')
                    ->required(),
                Number::make('Порядок сортировки','sort')
                    ->required(),
                Textarea::make('Описание','description')
                    ->hideOnIndex()
                    ->readonly(),
                Switcher::make('Статус', 'status')
                    ->required(),
                BelongsTo::make('Категория', 'category', fn($item) => $item->title ,resource: new CategoryResource())
                    ->valuesQuery(fn(Builder $query) => $query->active()),
                HasMany::make('Маркет плейсы', 'links', resource: new LinkResource())
                    ->creatable()
                    ->hideOnIndex(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
