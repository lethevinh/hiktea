<?php

use Illuminate\Database\Seeder;

class PostCategoriesSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(\App\Models\PostCategory::class, 5)->create();
	}
}
