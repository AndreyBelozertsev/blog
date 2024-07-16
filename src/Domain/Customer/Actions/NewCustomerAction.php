<?php

namespace Domain\Customer\Actions;

use App\Events\SendContactFormEvent;
use Domain\Customer\Models\Customer;
use Domain\Customer\DTOs\NewCustomerDTO;
use Domain\Customer\Contracts\NewCustomerContract;

class NewCustomerAction implements NewCustomerContract
{
    public function __invoke(NewCustomerDTO $customerDTO)
    {

        $customer = Customer::query()->create(collect($customerDTO)->toArray());

        event( new SendContactFormEvent( $customer ) );
        
        return $customer;
    }
}
