<?php
namespace Domain\Product\Models;



use Domain\Seo\Models\Seo;
use Support\Traits\HasSeo;

use Support\Traits\HasSlug;
use Support\Traits\CreateSeo;
use Support\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Domain\Product\QueryBuilders\CategoryQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, HasSlug, ScopeActive, HasSeo, CreateSeo;

    protected $routeName = 'category.show';

    protected $fillable = [
        'title',
        'slug',
        'sort',
        'parent_id'
    ];


    public function newEloquentBuilder($query): CategoryQueryBuilder 
    {
        return new CategoryQueryBuilder($query);
    }


    public function parent(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
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
}