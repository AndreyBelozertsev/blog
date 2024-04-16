<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Date;

use MoonShine\Fields\Number;
use Domain\Order\Models\Order;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Relationships\BelongsTo;

class OrderResource extends ModelResource
{
    protected string $model = Order::class;

    protected string $title = 'Заказы';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Number::make('Сумма','amount'),
                BelongsTo::make('Клиент','client', fn($item) => "$item->telegram_id - $item->username" ),
                Textarea::make('Подробности заказа','description'),
                Date::make('Дата создания', 'created_at') 
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}


// $table->foreignIdFor(Client::class)
// ->constrained()
// ->onUpdate('cascade')
// ->onDelete('cascade');
// $table->integer('amount');
// $table->text('description')->nullable();
// $table->timestamps();