<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\LinkCategoryResource;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\ClientResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\TgTarifResource;
use App\MoonShine\Resources\CategoryResource;
use MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\SubscriptionResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ),
            ]),

            MenuGroup::make(static fn() => 'Товары', [
                MenuItem::make(
                    static fn() => 'Категории',
                    new CategoryResource()
                ),
                MenuItem::make(
                    static fn() => 'Товары',
                    new ProductResource()
                ),
                MenuItem::make(
                    static fn() => 'Маркет плейсы',
                    new LinkCategoryResource()
                ),
            ]),

            MenuGroup::make(static fn() => 'Телеграм канал', [
                MenuItem::make(
                    static fn() => 'Тарифы ТГ',
                    new TgTarifResource()
                ),
                MenuItem::make(
                    static fn() => 'Подписки на канал',
                    new SubscriptionResource()
                ),
                MenuItem::make(
                    static fn() => 'Клиенты',
                    new ClientResource()
                ),
            ]),
            MenuItem::make(
                static fn() => 'Заказы',
                new OrderResource()
            ),

        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }

    public function register(): void
    {

    }
}
