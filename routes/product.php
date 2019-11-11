<?php 

		Route::group(['prefix'=>'product','namespace'=>'product'],function(){
		Route::get('/','ProductController@index')->name('pro');
		Route::get('del/{id}','ProductController@delete')->name('pro_del');
		Route::get('edit/{id}','ProductController@edit_pro')->name('pro_edit');
		Route::post('edit/{id}','ProductController@edit_pro_post')->name('pro_edit');
		Route::get('add','ProductController@add')->name('pro_add');
		Route::post('add','ProductController@post_add')->name('pro_add');
		// Route::get('search','ProductController@pro_search')->name('pro_search');
	});
		
 ?>