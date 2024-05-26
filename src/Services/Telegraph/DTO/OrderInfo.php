<?php

/** @noinspection PhpDocSignatureIsNotCompleteInspection */

namespace Services\Telegraph\DTO;

use Illuminate\Contracts\Support\Arrayable;

class OrderInfo implements Arrayable
{


    private ?string $name = null;
    private ?string $phone_number = null;
    private ?string $email = null;
    private ?string $shipping_address = null;


    public static function fromArray(array $data): OrderInfo
    {
        $orderInfo = new self();

        /* @phpstan-ignore-next-line */
        $orderInfo->name = $data['name'] ?? null;

        $orderInfo->phone_number = $data['phone_number'] ?? null;

        $orderInfo->email = $data['email'] ?? null;

        $orderInfo->shipping_address = $data['shipping_address'] ?? null;

        return $orderInfo;
    }

    public function name(): string|null
    {
        return $this->name;
    }

    public function phone_number(): string|null
    {
        return $this->phone_number;
    }

    public function email(): string|null
    {
        return $this->email;
    }

    public function shipping_address(): string|null
    {
        return $this->shipping_address;
    }

    public function toArray(): array
    {
        return array_filter([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'shipping_address' => $this->shipping_address,
        ]);
    }
}