<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
	'prefix' => config('admin.route.prefix'),
	'namespace' => config('admin.route.namespace'),
	'middleware' => config('admin.route.middleware'),
], function (Router $router) {

	$router->get('/', 'HomeController@index');
	$router->get('users', 'UsersController@index');

	$router->get('products', 'ProductsController@index');
	$router->get('products/create', 'ProductsController@create');
	$router->post('products', 'ProductsController@store');
	$router->get('products/{id}/edit', 'ProductsController@edit');
	$router->put('products/{id}', 'ProductsController@update');

	$router->get('posts', 'PostsController@index');
	$router->get('posts/create', 'PostsController@create');
	$router->post('posts', 'PostsController@store');
	$router->get('posts/{id}/edit', 'PostsController@edit');
	$router->put('posts/{id}', 'PostsController@update');

	$router->get('images', 'ImagesController@index');
	$router->get('images/create', 'ImagesController@create');
	$router->post('images', 'ImagesController@store');
	$router->get('images/{id}/edit', 'ImagesController@edit');
	$router->put('images/{id}', 'ImagesController@update');

	$router->get('galleries', 'GalleriesController@index');
	$router->get('galleries/create', 'GalleriesController@create');
	$router->post('galleries', 'GalleriesController@store');
	$router->get('galleries/{id}/edit', 'GalleriesController@edit');
	$router->put('galleries/{id}', 'GalleriesController@update');

	$router->get('pages', 'PagesController@index');
	$router->get('pages/create', 'PagesController@create');
	$router->post('pages', 'PagesController@store');
	$router->get('pages/{id}/edit', 'PagesController@edit');
	$router->put('pages/{id}', 'PagesController@update');

	$router->get('categories', 'CategoriesController@index');
	$router->get('categories/create', 'CategoriesController@create');
	$router->post('categories', 'CategoriesController@store');
	$router->get('categories/{id}/edit', 'CategoriesController@edit');
	$router->put('categories/{id}', 'CategoriesController@update');

	$router->get('post-categories', 'PostCategoriesController@index');
	$router->get('post-categories/create', 'PostCategoriesController@create');
	$router->post('post-categories', 'PostCategoriesController@store');
	$router->get('post-categories/{id}/edit', 'PostCategoriesController@edit');
	$router->put('post-categories/{id}', 'PostCategoriesController@update');

	$router->get('orders', 'OrdersController@index')->name('admin.orders.index');
	$router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show');
	$router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship');
	$router->post('orders/{order}/refund', 'OrdersController@handleRefund')->name('admin.orders.handle_refund');

	$router->get('coupon_codes', 'CouponCodesController@index');
	$router->post('coupon_codes', 'CouponCodesController@store');
	$router->get('coupon_codes/create', 'CouponCodesController@create');
	$router->get('coupon_codes/{id}/edit', 'CouponCodesController@edit');
	$router->put('coupon_codes/{id}', 'CouponCodesController@update');
	$router->delete('coupon_codes/{id}', 'CouponCodesController@destroy');
});
