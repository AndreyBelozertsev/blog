<?php
namespace Domain\Order\Models;

use Domain\Product\Models\TgTarif;
use Support\Traits\UsesUuid;
use Domain\Client\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentRegistry extends Model
{
    use HasFactory, UsesUuid;

    protected $primaryKey = 'invoice_payload';

    protected $fillable = [
        'telegram_id',
        'invoice_payload',
        'total_amount',
        'description',
        'tg_tarif_id',
        'telegram_payment_charge_id',
        'provider_payment_charge_id',
        'status'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'telegram_id', 'telegram_id');
    }

    public function tarif()
    {
        return $this->belongsTo(TgTarif::class, 'tg_tarif_id', 'id');
    }
}
