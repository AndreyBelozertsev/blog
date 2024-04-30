<?php

namespace Domain\Telegram\Models;

use Domain\Client\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Domain\Telegram\QueryBuilders\SubscriptionQueryBuilder;
use Support\Traits\ScopeActive;

class Subscription extends Model
{
    use HasFactory, ScopeActive;

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function newEloquentBuilder($query): SubscriptionQueryBuilder 
    {
        return new SubscriptionQueryBuilder($query);
    }
}
