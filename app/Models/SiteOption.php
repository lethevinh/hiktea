<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteOption extends Model {
	protected $table = 'siteoptions';

	protected $fillable = [
		'key',
		'value',
		'active',
	];
}
