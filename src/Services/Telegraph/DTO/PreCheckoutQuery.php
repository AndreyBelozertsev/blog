<?php

/** @noinspection PhpDocSignatureIsNotCompleteInspection */

namespace Services\Telegraph\DTO;

use Illuminate\Support\Str;
use DefStudio\Telegraph\DTO\Chat;
use DefStudio\Telegraph\DTO\User;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Support\Arrayable;

class PreCheckoutQuery implements Arrayable
{

    private string $id;
    private User $from;
    private string $currency;
    private int $total_amount;
    private bool $invoice_payload;

    private function __construct()
    {
    }

    /**
     * @param array{id:string,from:array<string, mixed>, currency:<string, mixed>,total_amount:int, invoice_payload:<string>} $data
     */
    public static function fromArray(array $data): PreCheckoutQuery
    {
        $preCheckoutQuery = new self();

        /* @phpstan-ignore-next-line */
        $preCheckoutQuery->id = $data['id'];

        $preCheckoutQuery->from = User::fromArray($data['from']);

        $preCheckoutQuery->currency = $data['currency'];

        $preCheckoutQuery->total_amount = $data['total_amount'];

        $preCheckoutQuery->invoice_payload = $data['invoice_payload'];

        return $preCheckoutQuery;
    }


    public function id(): string
    {
        return $this->id;
    }

    public function from(): User
    {
        return $this->from;
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function total_amount(): int
    {
        return $this->total_amount;
    }

    public function invoice_payload(): string
    {
        return $this->invoice_payload;
    }

    public function toArray(): array
    {
        return array_filter([
            'id' => $this->id,
            'from' => $this->from->toArray(),
            'currency' => $this->currency,
            'total_amount' => $this->total_amount,
            'invoice_payload' => $this->invoice_payload,
        ]);
    }
}
