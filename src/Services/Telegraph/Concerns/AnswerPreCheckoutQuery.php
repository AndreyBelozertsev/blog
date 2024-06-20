<?php 

/** @noinspection PhpUnhandledExceptionInspection */
namespace Services\Telegraph\Concerns;

use Services\Telegraph\TelegraphCustom;
use DefStudio\Telegraph\Exceptions\BotCommandException;


/**
 * @mixin Telegraph
 */

trait AnswerPreCheckoutQuery
{
    public function answerPreCheckoutQuery(string $pre_checkout_query_id, bool $ok, $error_message = null): TelegraphCustom
    {
        $telegraph = clone $this;

        $telegraph->endpoint = self::ENDPOINT_ANSWER_PRE_CHECKOUT_QUERY;

        $telegraph->data['pre_checkout_query_id'] = $pre_checkout_query_id;
        $telegraph->data['ok'] = $ok;
        if($error_message){
            $telegraph->data['error_message'] = $error_message;
        }
        //$telegraph->data['ok'] = false;
        //$telegraph->data['error_message'] = 'Проверка текста ответа ошибки';

        return $telegraph;
    }
}
