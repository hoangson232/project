<?php 
	Route::group(['prefix'=>'comment','namespace'=>'comment'],function(){
		Route::get('/','CommentController@index')->name('comment');
		Route::get('del/{id}','CommentController@delete')->name('com_del');
		
		Route::get('add','CommentController@add')->name('com_add');
		Route::post('add','CommentController@post_add')->name('com_add');
	});

 ?>