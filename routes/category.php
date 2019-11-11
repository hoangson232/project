<?php 
	Route::group(['prefix'=>'category','namespace'=>'category'],function(){
		Route::get('/','DemoController@category')->name('cat');
		Route::get('del/{id}','DemoController@delete')->name('cat_del');
		Route::get('edit/{id}','DemoController@edit_cate')->name('cat_edit');
		Route::post('edit/{id}','DemoController@edit_cate_post')->name('cat_edit');
		Route::get('add','DemoController@add')->name('cat_add');
		Route::post('add','DemoController@post_add')->name('cat_add');
	});

 ?>