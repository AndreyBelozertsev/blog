<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use Domain\Client\Models\Client;
use MoonShine\Decorations\Block;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use App\MoonShine\Pages\Client\ClientFormPage;
use App\MoonShine\Pages\Client\ClientIndexPage;
use App\MoonShine\Pages\Client\ClientDetailPage;

class ClientResource extends ModelResource
{
    protected string $model = Client::class;

    protected string $title = 'Клиенты';

    public function fields(): array
    {
        return [
            Block::make([
                Text::make('ID в тг','telegram_id'),   
                Text::make('Ник в тг','username'), 
                Text::make('Имя в ТГ','first_name'),
                Text::make('Фамилия в ТГ','last_name'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }



    public function getActiveActions(): array
    {
        return ['view'];
    }

    public function import(): ?ImportHandler
    {
        return null;
    }

}
