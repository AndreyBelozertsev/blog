<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;


use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Decorations\Block;
use Domain\Product\Models\TgTarif;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;

class TgTarifResource extends ModelResource
{
    protected string $model = TgTarif::class;

    protected string $title = 'Тарифы подписок в ТГ';

    public function fields(): array
    {
        return [
            Block::make([
                Text::make('Заголовок','title'),   
                Text::make('Цена','price'),
                Number::make('Порядок сортировки','sort'),
                Switcher::make('Статус', 'status') 
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function query(): Builder 
    {
        return parent::query()
            ->orderBy('sort', 'ASC');
    } 
}
