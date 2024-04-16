<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Date;

use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use Domain\Telegram\Models\Subscription;
use MoonShine\Fields\Relationships\BelongsTo;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SubscriptionResource extends ModelResource
{
    protected string $model = Subscription::class;

    protected string $title = 'Подписка на канал';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                BelongsTo::make('Клиент','client', fn($item) => "$item->telegram_id. - $item->username" ),
                Date::make('Дата окончания подписки', 'expaire_at'),
                Date::make('Дата создания', 'created_at')
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
            ->where('status', true);
    } 
}
