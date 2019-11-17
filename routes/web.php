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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('test','DemoController@index')->name('test');
// Route::get('home','DemoController@home')->name('home');
// Route::get('about','DemoController@about')->name('about');
// Route::get('product/{id}/{name}','DemoController@product')->name('product');
Route::get('/','HomeController@index')->name('home');
Route::group(['prefix'=>'frontend'],function(){
	Route::get('pro_detail/{slug}','HomeController@pro_detail')->name('pro_detail');
	Route::post('pro_detail/{slug}','HomeController@add_comment')->name('add_comment');




	Route::get('shop/{slug}','HomeController@shop')->name('shop');
	Route::get('cus_login','HomeController@cus_login')->name('cus_login');
	Route::post('cus_login','HomeController@post_login')->name('post_login');
	Route::get('cus_logout','HomeController@cus_logout')->name('cus_logout');
	Route::get('shop_checkout','HomeController@shop_checkout')->name('shop_checkout');
	Route::post('shop_checkout','HomeController@post_checkout')->name('post_checkout');
	Route::get('search_product','HomeController@search_product')->name('search_product');
	Route::get('add','HomeController@add')->name('cus_add');
	Route::post('add','HomeController@post_add')->name('cus_add');
	Route::get('change_pass','HomeController@change_pass')->name('cus_change_pass');
	Route::post('change_pass','HomeController@post_pass')->name('cus_change_pass');

	

});




Route::group(['prefix'=>'cart'],function(){
	Route::get('show-cart','CartController@show')->name('show-cart');
	Route::get('add-cart/{id}','CartController@add')->name('add-cart');
	Route::get('update-cart/{id}','CartController@update')->name('update-cart');
	Route::get('delete-cart/{id}','CartController@delete')->name('delete-cart');
	Route::get('delete-all','CartController@deleteAll')->name('delete-all');

});


//phần Route admin
Route::group(['prefix'=>'admin','namespace'=>'Backend','middleware'=>'auth'],function(){
		Route::get('/','Home_adminController@index')->name('admin');
		Route::get('/logout','AdminController@logout')->name('user_logout');
		Route::get('upfile','FileController@index')->name('upfile');
		Route::post('upload','FileController@upload')->name('upload');
		Route::get('change_pass','AdminController@change_pass')->name('user_change_pass');
		Route::post('change_pass','AdminController@post_pass')->name('user_change_pass');

		include 'category.php';
		include 'product.php';
		include 'account.php';
		include 'order.php';
		include 'comment.php';

});

Route::get('admin/login','Backend\AdminController@login')->name('login');
Route::post('admin/login','Backend\AdminController@post_login')->name('login');
Route::get('admin/forgot_password','Backend\AdminController@showResetForm')->name('forgot_password');
Route::post('admin/forgot_password','Backend\AdminController@postResetForm')->name('post_forgot_password');

Route::get('admin/reset/{token}','Backend\AdminController@reset')->name('reset-pass');
Route::post('admin/reset/{token}','Backend\AdminController@post_reset')->name('post-reset-pass');


