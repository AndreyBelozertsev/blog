<?php

namespace Domain\Product\Models;

use Support\Traits\HasSlug;
use Support\Casts\PriceCast;
use Support\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Model;
use Domain\Order\Models\PaymentRegistry;
use Domain\Product\QueryBuilders\TgTarifQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TgTarif extends Model
{
    use HasFactory, HasSlug, ScopeActive;

    protected $fillable = [
        'title',
        'price',
        'days',
        'sort',
        'status',
    ];

    protected $casts = [
        'price' => PriceCast::class
    ];

    protected function slugUnique(string $slug):string
    {

        $originalSlug = $slug;
        $i=0;

        while($this->isSlugExsist($slug)){
            $i++;
            $slug = $originalSlug . '_' . $i;
        }

        return $slug;
    }

    protected function makeSlug():void
    {

        $slug = $this->slugUnique(
            str($this->{$this->slugFrom()})
                ->slug('_')
                ->value()
        );
 
        $this->{$this->slugColumn()} = $this->{$this->slugColumn()} ?? $slug;
      
    }

    public function payments_registry()
    {
        return $this->hasMany(PaymentRegistry::class);
    }

    public function newEloquentBuilder($query): TgTarifQueryBuilder 
    {
        return new TgTarifQueryBuilder($query);
    }
}
