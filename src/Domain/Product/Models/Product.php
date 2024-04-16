<?php
namespace Domain\Product\Models;



use Domain\Seo\Models\Seo;
use Support\Traits\HasSeo;
use Support\Traits\HasSlug;
use Support\Casts\PriceCast;
use Support\Traits\CreateSeo;
use Support\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Domain\Product\QueryBuilders\ProductQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, HasSlug, ScopeActive, HasSeo, CreateSeo;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'images',
        'price',
        'description',
        'category_id',
        'status',
        'sort',
    ];

    protected $casts = [
        'price' => PriceCast::class
    ];

    protected $routeName = 'product.show';

    public function newEloquentBuilder($query): ProductQueryBuilder 
    {
        return new ProductQueryBuilder($query);
    }

    protected function makeUrl($slug = null):string
    {
        
        if(!$slug){
            $slug = $this->slug;
        }

        return route($this->routeName, ['slug' => $slug] );
    }

    public function seo(): MorphOne
    {
        return $this->morphOne(Seo::class, 'seoable');
    }

    protected function slugFrom():string
    {
        return 'title';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }
}