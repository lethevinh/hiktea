<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

//Route::redirect('/', '/san-pham.html')->name('root');
Route::get('/admin/file-manager/app/public/uploads/{filePath}', function ($filePath){
    if (!Storage::disk('public')->exists('uploads/'.$filePath)){
        abort('404');
    }
    return response()->file(storage_path('app/public/uploads/'.DIRECTORY_SEPARATOR.($filePath)));
})->name('storage.gallery.image');
Route::get('/', 'PagesController@home')->name('pages.home');
// Page
Route::get('/lien-he.html', 'PagesController@contact')->name('pages.contact');
Route::get('/hinh-anh.html', 'PagesController@gallery')->name('pages.gallery');
Route::get('/hinh-anh/{gallery}.html', 'PagesController@galleryDetail')->name('pages.gallery-detail');
Route::get('/cua-hang.html', 'PagesController@branch')->name('pages.branch');
Route::get('thanh-toan.html', 'OrdersController@page')->name('orders.guest');
Route::get('gio-hang.html', 'CartController@page')->name('carts.guest');
Route::get('don-hang/{no}', 'OrdersController@viewOrder')
	->name('orders.view.guest');
Route::get('coupon_codes/{code}', 'CouponCodesController@check')
	->name('coupon_codes.check');

// Menu
Route::get('thuc-don.html', 'ProductsController@index')->name('products.index');
Route::get('thuc-don/{category}.html', 'ProductsController@category')
	->name('products.category');
Route::get('thuc-don/{category}/{product}.html', 'ProductsController@product')
	->name('products.product');
// Post
Route::get('bai-viet.html', 'PostController@index')->name('posts.index');
Route::get('bai-viet/{category}.html', 'PostController@category')
	->name('posts.category');
Route::get('bai-viet/{category}/{post}.html', 'PostController@post')
	->name('posts.view');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
	Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
	Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
	Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
	Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
	Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');

	Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
	Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
	Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
	Route::post('cart', 'CartController@add')->name('cart.add');
//    Route::get('gio-hang-user.html', 'CartController@index')->name('carts.index');
	Route::get('cart', 'CartController@index')->name('cart.index');
	Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
	Route::post('orders', 'OrdersController@store')->name('orders.store');
	Route::get('don-hang.html', 'OrdersController@index')->name('orders.index');
//    Route::get('orders', 'OrdersController@index')->name('orders.index');
	Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
	Route::post('orders/{order}/received', 'OrdersController@received')->name('orders.received');
	Route::get('orders/{order}/review', 'OrdersController@review')->name('orders.review.show');
	Route::post('orders/{order}/review', 'OrdersController@sendReview')->name('orders.review.store');
	Route::post('orders/{order}/apply_refund', 'OrdersController@applyRefund')->name('orders.apply_refund');
	Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')->name('payment.alipay');
	Route::get('payment/alipay/return', 'PaymentController@alipayReturn')->name('payment.alipay.return');
	Route::get('payment/{order}/wechat', 'PaymentController@payByWechat')->name('payment.wechat');

//    Route::get('coupon_codes/{code}', 'CouponCodesController@show')->name('coupon_codes.show');
});
Route::get('san-pham/{product}', 'ProductsController@show')->name('products.show');
Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
Route::post('payment/wechat/notify', 'PaymentController@wechatNotify')->name('payment.wechat.notify');
Route::post('payment/wechat/refund_notify', 'PaymentController@wechatRefundNotify')->name('payment.wechat.refund_notify');
Route::get('{page}.html', 'PagesController@page')->name('pages.page');
