<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
class Product extends Model {
	use Sluggable,PivotEventTrait;

	protected $fillable = [
		'title','slug', 'code', 'description', 'content', 'image', 'on_sale',
		'rating', 'sold_count', 'review_count', 'price'
	];
	protected $casts = [
		'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
	];

	public function sluggable() {
		return [
			'slug' => [
				'source' => 'title',
			],
		];
	}
    public static function boot()
    {
        parent::boot();
        static::pivotAttached(function ($model, $relationName, $pivotIds, $pivotIdsAttributes) {
            if ($relationName == 'categories'){
                $category = Category::find($pivotIds[0]);
                if ($category) {
                    $model->code = $category->code.$model->id;
                    $model->save();
                }
            }
        });
    }
	// 与商品SKU关联
	public function skus() {
		return $this->hasMany(ProductSku::class);
	}

	public function getImageUrlAttribute() {
		// 如果 image 字段本身就已经是完整的 url 就直接返回
		if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
			return $this->attributes['image'];
		}
		return \Storage::disk('public')->url($this->attributes['image']);
	}

	public function orderItems() {
		return $this->hasMany(OrderItem::class);
	}

	public function categories() {
		return $this->belongsToMany(Category::class)->withTimestamps();
	}

    public function getCategoriesAttribute($value)
    {
        return explode(',', $value);
    }

    public function setCategoriesAttribute($value)
    {
        $this->attributes['categories'] = implode(',', $value);
    }
	public function toLink(){
        return url('san-pham/'.$this->categories()->first()->slug.'/'.$this->slug.'.html');
    }
}
