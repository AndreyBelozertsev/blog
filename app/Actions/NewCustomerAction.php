<?php
namespace App\Actions;


use App\DTO\NewCustomerDTO;
use App\Contracts\NewCustomerContract;

class NewCustomerAction implements NewCustomerContract
{
    public function __invoke(NewCustomerDTO $customerDTO)
    {
        return $customerDTO;
    }
}
