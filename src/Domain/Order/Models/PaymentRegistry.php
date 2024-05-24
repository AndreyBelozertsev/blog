<?php
namespace Domain\Order\Models;

use Support\Traits\UsesUuid;
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
        'status'
    ];
}
