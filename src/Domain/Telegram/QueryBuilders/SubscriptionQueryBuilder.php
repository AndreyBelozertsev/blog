<?php
namespace Domain\Telegram\QueryBuilders;



use Illuminate\Database\Eloquent\Builder;

class SubscriptionQueryBuilder extends Builder
{

    public function activeItem($client_id): SubscriptionQueryBuilder
    {
        return $this->active()
            ->where('client_id', $client_id)
            ->where('expaire_at', '>', NOW());
    }
}
