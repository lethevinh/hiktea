<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model {
	use Sluggable;

	public function sluggable() {
		return [
			'slug' => [
				'source' => 'title',
			],
		];
	}
	public function setImagesAttribute($pictures) {
		if (is_array($pictures)) {
			$this->attributes['images'] = json_encode($pictures);
		}
	}

	public function getImagesAttribute($pictures) {
		return json_decode($pictures, true);
	}

    public function getPhotosAttribute() {
        return array_map(function ($image){
            return \Storage::disk('public')->url($image);
        }, $this->images);
    }
}
