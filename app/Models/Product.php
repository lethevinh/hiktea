<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model {
	use Sluggable, PivotEventTrait;

	protected $fillable = [
		'title', 'slug', 'code', 'description', 'content', 'image', 'on_sale','time',
		'rating', 'sold_count', 'review_count', 'price',
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
	public static function boot() {
		parent::boot();
		static::pivotAttached(function ($model, $relationName, $pivotIds, $pivotIdsAttributes) {
			if ($relationName == 'categories') {
				$category = Category::find($pivotIds[0]);
				if ($category) {
					$model->code = $category->code . $model->id;
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
		$images = json_decode($this->attributes['images']);
		if (!empty($images) && Str::startsWith($images[0], ['http://', 'https://'])) {
			return $images[0];
		}
		return \Storage::disk('public')->url($images[0]);
	}

	public function orderItems() {
		return $this->hasMany(OrderItem::class);
	}

	public function categories() {
		return $this->belongsToMany(Category::class)->withTimestamps();
	}

	public function getCategoriesAttribute($value) {
		return explode(',', $value);
	}

	public function setCategoriesAttribute($value) {
		$this->attributes['images'] = implode(',', $value);
	}

	public function setImagesAttribute($images) {
		if (is_array($images)) {
			$this->attributes['images'] = json_encode($images);
		}
	}

	public function getImagesAttribute($images) {
		return json_decode($images, true);
	}

	public function getLinkAttribute() {
		return url('thuc-don/' . $this->categories()->first()->slug . '/' . $this->slug . '.html');
	}

	public function toLink() {
		return url('thuc-don/' . $this->categories()->first()->slug . '/' . $this->slug . '.html');
	}

	/**
	 * The options that belong to the role.
	 */
	public function options() {
        return $this->belongsToMany(Option::class,  'product_option', 'product_id', 'option_id')
            ->using(ProductOption::class)
            ->withPivot([
                'title',
                'slug',
                'min_select',
                'max_select',
            ])
            ->withTimestamps();
	}
}
