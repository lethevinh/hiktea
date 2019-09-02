<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model {
	protected $table = 'post_categories';

	public function getLinkAttribute() {
		return url('bai-viet/' . $this->slug . '.html');
	}
}
