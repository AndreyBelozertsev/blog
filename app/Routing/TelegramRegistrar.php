<?php

declare(strict_types=1);

namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Routing\Registrar;
use App\Http\Controllers\TelegramController;

final class TelegramRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar): void
    {
        Route::middleware('web')->prefix('tg')->group(function () {
            Route::get('/index', [TelegramController::class, 'index'])->name('telegram.index');
        });
    }
}
