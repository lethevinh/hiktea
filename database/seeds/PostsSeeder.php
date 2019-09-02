<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// 创建 30 个商品
		\App\Models\PostCategory::all()->each(function (\App\Models\PostCategory $category) {
			$posts = factory(\App\Models\Post::class, 30)->create();
			foreach ($posts as $post) {
				$post->categories()->attach($category->id);
			}
		});
	}
}
