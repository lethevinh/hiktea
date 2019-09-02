<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $table = 'posts';

	public function categories() {
		return $this->belongsToMany(PostCategory::class, 'category_post', 'post_id', 'category_id')->withTimestamps();
	}

}
