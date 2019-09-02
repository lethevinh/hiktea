<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	public function run() {
		/*
			$this->call(UsersSeeder::class);
			$this->call(CategoriesSeeder::class);
			$this->call(UserAddressesSeeder::class);
			$this->call(PagesSeeder::class);
			$this->call(CouponCodesSeeder::class);
			$this->call(OrdersSeeder::class);
		*/

		$this->call(UsersSeeder::class);
		$this->call(CategoriesSeeder::class);
		$this->call(UserAddressesSeeder::class);
		$this->call(PagesSeeder::class);
		$this->call(CouponCodesSeeder::class);
		$this->call(OrdersSeeder::class);
		$this->call(PostCategoriesSeeder::class);
		$this->call(PostsSeeder::class);
	}
}
