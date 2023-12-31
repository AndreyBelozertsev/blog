<?php
namespace App\Routing;

use App\Contracts\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Contracts\Routing\Registrar;
use App\Http\Controllers\ThumbnailController;

class AppRegistrar implements RouteRegistrar
{
    public function map(Registrar $registrar):void
    {

        Route::get('/', [HomeController::class, 'index'])->name('home'); 

        Route::post('/contact-form', [HomeController::class, 'sendForm'])->name('sendForm'); 

    }
}