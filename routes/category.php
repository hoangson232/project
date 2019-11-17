<?php 
	Route::group(['prefix'=>'category','namespace'=>'category'],function(){
		Route::get('/','CategoryController@category')->name('cat');
		Route::get('del/{id}','CategoryController@delete')->name('cat_del');
		Route::get('edit/{id}','CategoryController@edit_cate')->name('cat_edit');
		Route::post('edit/{id}','CategoryController@edit_cate_post')->name('cat_edit');
		Route::get('add','CategoryController@add')->name('cat_add');
		Route::post('add','CategoryController@post_add')->name('cat_add');
	});

 ?>