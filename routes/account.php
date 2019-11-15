<?php 
Route::group(['prefix'=>'account'],function(){
	Route::get('','AccountController@index')->name('account');
	Route::get('edit-{id}','AccountController@edit')->name('account_edit');
	Route::post('edit-{id}','AccountController@post_edit')->name('account_edit');
	Route::get('add','AccountController@add')->name('account_add');
	Route::post('add','AccountController@post_add')->name('account_add');
	
	Route::get('delete-{id}','AccountController@delete')->name('account_delete');
});

 ?>