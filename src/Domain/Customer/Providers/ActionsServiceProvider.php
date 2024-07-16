<?php

namespace Domain\Customer\Providers;

use Illuminate\Support\ServiceProvider;
use Domain\Customer\Actions\NewCustomerAction;
use Domain\Customer\Contracts\NewCustomerContract;

class ActionsServiceProvider extends ServiceProvider
{
    public array $bindings = [
        NewCustomerContract::class => NewCustomerAction::class
    ];
}
