<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {
	use Sluggable;

	public function sluggable() {
		return [
			'slug' => [
				'source' => 'title',
			],
		];
	}
	protected $casts = [
		'media-link' => 'json',
	];
	public function setImagesAttribute($pictures) {
		if (is_array($pictures)) {
			$this->attributes['images'] = json_encode($pictures);
		}
	}

	public function getImagesAttribute($pictures) {
		return json_decode($pictures, true);
	}

	public function getLinkAttribute() {
		return url('hinh-anh/' . $this->slug . '.html');
	}

	public function getMediaLinkAttribute($extra) {
		return array_values(json_decode($extra, true) ?: []);
	}

	public function getMediasAttribute($extra) {
		$medias = json_decode($this->attributes['media-link'], true);
		foreach ($medias as $key => $value) {
			$id = str_replace('https://www.facebook.com/watch/?v=', '', $value['link']);
			$medias[$key]['thumbnail'] = 'https://graph.facebook.com/' . $id . '/picture';
		}
		return $medias;
	}

	public function setMediaLinkAttribute($extra) {
		$this->attributes['media-link'] = json_encode(array_values($extra));
	}
}
