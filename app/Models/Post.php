<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model {

	protected $table = 'posts';

	public function categories() {
		return $this->belongsToMany(PostCategory::class, 'category_post', 'post_id', 'category_id')->withTimestamps();
	}
	public function link() {
		return url('bai-viet/' . $this->categories()->first()->slug . '/' . $this->slug . '.html');
	}

	public function getImageUrlAttribute() {

		if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
			return $this->attributes['image'];
		}
		return \Storage::disk('public')->url($this->attributes['image']);
	}

	public function getLinkAttribute() {
		$category = $this->categories()->first();
		$categoryLink = "danh-muc";
		if ($category) {
			$categoryLink = $this->categories()->first()->slug;
		}

		return url('bai-viet/' . $categoryLink . '/' . $this->slug . '.html');
	}
}
