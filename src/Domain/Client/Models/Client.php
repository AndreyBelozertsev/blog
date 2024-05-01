<?php

namespace Domain\Client\Models;

use Domain\Order\Models\Order;
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

    public function chats()
    {
        return $this->hasMany(TelegraphChat::class);
    }

    
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }
}
