<?php

use App\Models\Product;
use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('data:update', function () {
    $products = Product::all();
    foreach ($products as $product) {
        if ($product->categories){
            if (!empty($product->categories()->get()[0]->code)){
                $product->code = $product->categories()->get()[0]->code.str_pad($product->id, 6, '0', STR_PAD_LEFT);
                $product->save();
            }
        }
    }
})->describe('Update Data');
