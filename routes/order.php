<?php 
Route::group(['prefix'=>'order','namespace'=>'order'],function(){
	Route::get('/','OrderController@order_list')->name('order_list');
	Route::get('new_order','OrderController@new_order_list')->name('new_order_list');
	Route::get('order_detail/{id}','OrderController@order_detail')->name('order_detail');
	Route::post('update_order_status','OrderController@order_update')->name('order_update');
});




 ?>