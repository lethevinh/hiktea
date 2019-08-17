<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
class CategoriesSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$categories = config('categories');
		foreach ($categories as $categoryData) {
			$category = \App\Models\Category::create([
				'title' => $categoryData['name'],
				'description' => $categoryData['name'],
				'content' => $categoryData['name'],
				'image' => '',
				'status' => true,
				'rating' => 1,
				'sold_count' => 0,
				'review_count' => 0,
			]);
			foreach ($categoryData['products'] as $item) {
				$price = str_replace(',', '', $item['price']);
				$price = str_replace('đ', '', $price);
				$product = \App\Models\Product::create([
					'title' => $item['name'],
					'description' => $item['name'],
					'content' => $item['name'],
					'image' => $item['image'],
					'on_sale' => true,
					'rating' => 2,
					'sold_count' => 0,
					'review_count' => 0,
					'price' => $price,
				]);
				$sku = \App\Models\ProductSku::create([
					'title' => $item['name'],
					'description' => $item['name'],
					'price' => $price,
					'product_id' => $product->id,
					'stock' => rand(),
				]);
				$product->categories()->attach($category->id);
				$product->update(['price' => $sku->price]);
				// upload file
                try{
                    $fileContents =  file_get_contents($item['image']);
                    $nameFile = "image-".$product->slug.'.jpg';
                    Storage::put('uploads/'.$nameFile, $fileContents);
                    $product->update(['image' => 'uploads/'.$nameFile]);
                }catch (Exception $e) {
//                    throwException($e);
                }
                // update content
			}
			echo $category['name'];
		}
	}
}
