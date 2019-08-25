<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	use Sluggable;

	public function sluggable() {
		return [
			'slug' => [
				'source' => 'title',
			],
		];
	}

	protected $table = 'categories';

	protected $fillable = [
		'title', 'slug', 'code', 'description', 'content', 'image', 'on_sale',
		'rating', 'sold_count', 'review_count',
	];

	public function products() {
		return $this->belongsToMany(Product::class)->withTimestamps();
	}

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

	public function toLink(){
	    return url('san-pham/'.$this->slug.'.html');
    }
}
