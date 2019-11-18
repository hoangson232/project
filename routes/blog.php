<?php 
				Route::group(['prefix'=>'blog','namespace'=>'blog'],function() {

			
			Route::get('list-blog','BlogController@list_blog')->name('list-blog');
			Route::get('add-blog','BlogController@add')->name('add-blog');
			Route::post('add-blog','BlogController@post_add')->name('add-blog');
			Route::get('edit-blog/{id}','BlogController@edit')->name('edit-blog');
			Route::post('edit-blog/{id}','BlogController@edit_post')->name('edit-blog');
			Route::get('delete-blog/{id}','BlogController@delete')->name('delete-blog');
	});
 ?>