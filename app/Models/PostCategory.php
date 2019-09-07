<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model {
	protected $table = 'post_categories';

	use Sluggable;

	public function sluggable() {
		return [
			'slug' => [
				'source' => 'title',
			],
		];
	}

	public function getLinkAttribute() {
		return url('bai-viet/' . $this->slug . '.html');
	}
}
