<?php

declare(strict_types=1);

namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Contracts\Routing\Registrar;
use App\Http\Controllers\CategoryController;

final class ProductRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar): void
    {
        Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
    
        Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
    }
}
