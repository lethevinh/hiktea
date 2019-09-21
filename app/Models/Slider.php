<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model {
	use Sluggable;

	public function sluggable() {
		return [
			'slug' => [
				'source' => 'title',
			],
		];
	}
	public function setImagesAttribute($pictures) {
        $this->attributes['images'] = json_encode(array_values($pictures));
	}

	public function getImagesAttribute($pictures) {
		return array_values(json_decode($pictures, true) ?: []);
	}

    public function getPhotosAttribute() {
        return array_map(function ($image){
           $image['photo'] =  \Storage::disk('public')->url($image['image']);
            return $image;
        }, $this->images);
    }
}
