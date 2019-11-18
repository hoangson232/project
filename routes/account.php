<?php 
Route::group(['prefix'=>'account','namespace'=>'account'],function(){
	Route::get('','AccountController@index')->name('account');
	Route::get('cus','AccountController@cus_index')->name('cus_account');
	Route::get('edit-{id}','AccountController@edit')->name('account_edit');
	Route::post('edit-{id}','AccountController@post_edit')->name('account_edit');
	Route::get('add','AccountController@add')->name('account_add');
	Route::post('add','AccountController@post_add')->name('account_add');
	Route::get('cus_add','AccountController@cus_add')->name('cus_account_add');
	Route::post('cus_add','AccountController@cus_post_add')->name('cus_account_add');	
	Route::get('delete-{id}','AccountController@delete')->name('account_delete');
});

 ?>