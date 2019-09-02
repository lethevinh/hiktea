<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model {
	//
	/**
	 * The products that belong to the role.
	 */
	public function products() {
		return $this->belongsToMany(Product::class, 'product_option');
	}
}
