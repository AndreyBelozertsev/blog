<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Domain\Seo\Providers\SeoServiceProvider;
use Domain\Page\Providers\PageServiceProvider;
use Domain\Order\Providers\OrderServiceProvider;
use Services\Telegraph\TelegraphServiceProvider;
use Domain\Client\Providers\ClientServiceProvider;
use Domain\Telegram\Providers\TelegramServiceProvider;


class DomainServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->register(
            ClientServiceProvider::class
        );

        $this->app->register(
            SeoServiceProvider::class
        );

        $this->app->register(
            PageServiceProvider::class
        );

        $this->app->register(
            TelegramServiceProvider::class
        );

        $this->app->register(
            TelegraphServiceProvider::class
        );

        $this->app->register(
            OrderServiceProvider::class
        );


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
