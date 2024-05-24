<?php 

namespace Services\Telegraph;

use DefStudio\Telegraph\Telegraph;
use Services\Telegraph\Concerns\BanChannelMember;
use Services\Telegraph\Concerns\ResponseChatJoin;
use Services\Telegraph\Concerns\UnbanChannelMember;
use Services\Telegraph\Concerns\ResponseSendInvoice;
use Services\Telegraph\Concerns\AnswerPreCheckoutQuery;


class TelegraphCustom extends Telegraph
{
    use ResponseChatJoin, BanChannelMember, UnbanChannelMember, ResponseSendInvoice, AnswerPreCheckoutQuery;
    
    public const ENDPOINT_APPROVE_CHAT_JOIN_REQUEST = 'approveChatJoinRequest';
    public const ENDPOINT_SEND_INVOICE = 'sendInvoice';

    public const ENDPOINT_ANSWER_PRE_CHECKOUT_QUERY = 'answerPreCheckoutQuery';


}