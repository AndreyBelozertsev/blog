<?php 

/** @noinspection PhpUnhandledExceptionInspection */
namespace Services\Telegraph\Concerns;

use Services\Telegraph\TelegraphCustom;
use DefStudio\Telegraph\Exceptions\BotCommandException;


/**
 * @mixin Telegraph
 */

trait ResponseSendInvoice
{
    public function sendInvoice(string $chat_id, string $title, string $description, string $payload, array $prices, array $provider_data ): TelegraphCustom
    {
        $telegraph = clone $this;

        $telegraph->endpoint = self::ENDPOINT_SEND_INVOICE;

        $telegraph->data['chat_id'] = $chat_id;
        $telegraph->data['provider_token'] = '381764678:TEST:85964';
        $telegraph->data['title'] = $title;
        $telegraph->data['description'] = $description;
        $telegraph->data['payload'] = $payload;
        $telegraph->data['currency'] = 'RUB';
        $telegraph->data['start_parametr'] = 'test';
        $telegraph->data['prices'] = $prices;
        $telegraph->data['need_email'] = true;
        $telegraph->data['send_email_to_provider'] = true;
        $telegraph->data['provider_data'] = $provider_data;
        

        return $telegraph;
    }
}
