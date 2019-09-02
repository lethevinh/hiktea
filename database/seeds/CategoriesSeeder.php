<?php

use Illuminate\Database\Seeder;

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
				'title' => $categoryData['dish_type_name'],
				'description' => $categoryData['dish_type_name'],
				'content' => $categoryData['dish_type_name'],
				'image' => '',
				'status' => true,
				'rating' => 1,
				'sold_count' => 0,
				'review_count' => 0,
			]);
			foreach ($categoryData['dishes'] as $item) {
				$price = $item['price']['value'];
				$product = \App\Models\Product::create([
					'title' => $item['name'],
					'description' => $item['description'],
					'content' => $item['description'],
					'images' => json_encode($item['photos']),
					'time' => json_encode($item['time']),
					'on_sale' => $item['is_available'],
					'rating' => 2,
					'quatity' => 100000,
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
				foreach ($item['options'] as $keyOption => $option) {
					foreach ($option['option_items']['items'] as $key => $optionItem) {
						$priceItem = $optionItem['price']['value'];
						$option = \App\Models\Option::create([
							'title' => $optionItem['name'],
							'description' => $optionItem['name'],
							'content' => $optionItem['name'],
							'is_default' => $optionItem['is_default'],
							'price' => $priceItem,
							'max_quantity' => $optionItem['max_quantity'],
							'weight' => $optionItem['weight'],
							'top_order' => 0,
						]);
						$product->options()->attach($option->id, [
							'title' => $option['name'],
							'min_select' => $option['option_items']['min_select'],
							'max_select' => $option['option_items']['max_select'],
						]);
					}
				}
				// upload file
				try {
					$images = [];
					foreach ($item['photos'] as $key => $photo) {
						$fileContents = file_get_contents($photo['value']);
						$nameFile = "image-" . $product->slug . '.jpg';
						Storage::put('uploads/' . $nameFile, $fileContents);
						$images[] = 'uploads/' . $nameFile;
					}
					$product->update(['images' => json_encode($images)]);

				} catch (Exception $e) {
//                    throwException($e);
				}
				// update content
			}
			echo $category['name'];
		}
	}
}
