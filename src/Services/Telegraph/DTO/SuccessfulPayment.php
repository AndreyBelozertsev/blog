<?php

/** @noinspection PhpDocSignatureIsNotCompleteInspection */

namespace Services\Telegraph\DTO;

use Illuminate\Contracts\Support\Arrayable;

class SuccessfulPayment implements Arrayable
{

    private string $currency;
    private int $total_amount;
    private string $invoice_payload;
    private ?string $shipping_option_id = null;
    private ?OrderInfo $order_info = null;
    private string $telegram_payment_charge_id;
    private string $provider_payment_charge_id;

    
    private function __construct()
    {
    }

    /**
     * @param array{currency:<string, mixed>,total_amount:int, invoice_payload:<string>} $data
     */
    public static function fromArray(array $data): SuccessfulPayment
    {
        $successfulPayment = new self();

        /* @phpstan-ignore-next-line */

        $successfulPayment->currency = $data['currency'];
        $successfulPayment->total_amount = $data['total_amount'];
        $successfulPayment->invoice_payload = $data['invoice_payload'];
        $successfulPayment->shipping_option_id = $data['shipping_option_id'] ?? null;
        if (isset($data['order_info'])) {
            /* @phpstan-ignore-next-line  */
            $successfulPayment->order_info = OrderInfo::fromArray($data['order_info']);
        }

        $successfulPayment->telegram_payment_charge_id = $data['telegram_payment_charge_id'];
        $successfulPayment->provider_payment_charge_id = $data['provider_payment_charge_id'];

        return $successfulPayment;
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

    public function shipping_option_id(): string|null
    {
        return $this->shipping_option_id;
    }

    public function order_info(): OrderInfo|null
    {
        return $this->order_info;
    }

    public function telegram_payment_charge_id(): string
    {
        return $this->telegram_payment_charge_id;
    }

    public function provider_payment_charge_id(): string
    {
        return $this->provider_payment_charge_id;
    }

    

    public function toArray(): array
    {
        return array_filter([
            'currency' => $this->currency,
            'total_amount' => $this->total_amount,
            'invoice_payload' => $this->invoice_payload,
            'order_info' =>  $this->order_info?->toArray(),
            'telegram_payment_charge_id' => $this->telegram_payment_charge_id,
            'provider_payment_charge_id' => $this->provider_payment_charge_id,
        ]);
    }
}
