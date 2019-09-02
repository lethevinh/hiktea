<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model {

	protected $fillable = [
		'title', 'slug', 'min_select', 'max_select',
	];

}
