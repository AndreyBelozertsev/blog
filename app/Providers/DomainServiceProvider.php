<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Domain\Seo\Providers\SeoServiceProvider;
use Domain\Auth\Providers\AuthServiceProvider;
use Domain\Page\Providers\PageServiceProvider;
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
            AuthServiceProvider::class
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
