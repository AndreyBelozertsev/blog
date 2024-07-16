<?php
namespace Domain\Customer\Contracts;

use Domain\Customer\DTOs\NewCustomerDTO;


interface NewCustomerContract
{
    public function __invoke(NewCustomerDTO $data);
}