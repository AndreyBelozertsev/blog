<?php

namespace Domain\Customer\Providers;

use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

    }

    public function register(): void
    {
 
        $this->app->register(
            ActionsServiceProvider::class
        );
    }
}
