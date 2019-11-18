<?php 
			Route::group(['prefix'=>'banner','namespace'=>'banner'],function() {

			
			Route::get('list-banner','BannerController@index')->name('list-banner');
			Route::get('add-banner','BannerController@add')->name('add-banner');
			Route::post('add-banner','BannerController@post_add')->name('add-banner');
			Route::get('edit-banner/{id}','BannerController@edit')->name('edit-banner');
			Route::post('edit-banner/{id}','BannerController@edit_post')->name('edit-banner');
			Route::get('delete-banner/{id}','BannerController@delete')->name('delete-banner');
	});
 ?>