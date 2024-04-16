<?php

namespace Domain\Order\Models;

use Support\Casts\PriceCast;
use Domain\Client\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'amount',
        'description',
    ];

    protected $casts = [
        'amount' => PriceCast::class
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
