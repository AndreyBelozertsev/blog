<?php
namespace App\Contracts;

use App\DTO\NewCustomerDTO;

interface NewCustomerContract
{
    public function __invoke(NewCustomerDTO $data);
}