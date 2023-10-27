<?php
namespace App\DTO;


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