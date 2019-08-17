<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'slug','description', 'content', 'image'
    ];

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function toLink() {
        return url($this->slug.'.html');
    }
}
