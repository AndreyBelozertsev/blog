<?php
namespace Support;

use Closure;
use App\Events\AfterSessionRegenerated;


class SessionRegenerator
{
    public static function run(Closure $callback = null): void
    {

        request()->session()->invalidate();
     
        request()->session()->regenerateToken(); 

        if(!is_null($callback)){
            $callback();
        }

    }
}