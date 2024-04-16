<?php

namespace Domain\Seo\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class SeoServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Relation::morphMap([
            'page' => 'Domain\Page\Models\Page',
            'category' => 'Domain\Product\Models\Category',
        ]);
    }

    public function register(): void
    {
        $this->app->register(
            ActionsServiceProvider::class
        );
    }
}
