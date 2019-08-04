<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('Api')->group(function () {
    // Controllers Within The "App\Http\Controllers\Api" Namespace
    Route::get('order/{id}', 'OrderController@show')->name('api_order.show');

    Route::put('db/{model}/{id}', 'Controller@update')->name('api_db.update');
    Route::get('db/{model}/{id}', 'Controller@show')->name('api_db.show');
    Route::delete('db/{model}/{id}', 'Controller@delete')->name('api_db.delete');
    Route::post('db/{model}', 'Controller@store')->name('api_db.store');
    Route::get('db/{model}', 'Controller@index')->name('api_db.index');
});
