<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
class ProductOption extends Pivot {

    protected $table = 'product_option';
	protected $fillable = [
		'title', 'slug', 'min_select', 'max_select',
	];

}
