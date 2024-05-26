<?php

namespace Domain\Client\Models;

use Domain\Order\Models\Order;
use Domain\Order\Models\PaymentRegistry;
use Illuminate\Database\Eloquent\Model;
use Domain\Telegram\Models\Subscription;
use Services\Telegraph\Models\TelegraphChat;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;


    protected $fillable = [
        'telegram_id',
        'username',
        'first_name',
        'last_name',
        'mail',
        'phone',
        'source',
        'name',
        'telegraph_chat_id',
    ];

    public function chat()
    {
        return $this->belongsTo(TelegraphChat::class, 'telegraph_chat_id', 'id');
    }

    
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function payments_registry()
    {
        return $this->hasMany(PaymentRegistry::class, 'telegram_id', 'telegram_id');
    }
}
