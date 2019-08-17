<?php

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 创建 30 个商品
         factory(\App\Models\Page::class, 30)->create();
    }
}
