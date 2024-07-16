<?php
namespace Domain\Customer\DTOs;

use Illuminate\Http\Request;

class NewCustomerDTO
{

    public readonly string $name;
    public readonly string $phone;
    public readonly string|null $comment;
    
    public function __construct(array $customer)
    {
        $this->name = $customer['name'];
        $this->phone = $customer['phone'];
        $this->comment = isset($customer['comment']) ? $customer['comment'] : null;
    }
}