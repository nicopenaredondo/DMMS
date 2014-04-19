<?php

Route::group(array('before' => 'install|logged-in', 'prefix' => 'auth'),function(){

	Route::get('/',function(){
		return Redirect::route('auth.login');
	});

	Route::get('login',array(
		'as' 		=> 'auth.login',
		'uses'	=> 'AuthController@getLogin'
	));

	Route::post('login',array(
		'as' 		=> 'auth.login.process',
		'uses'	=> 'AuthController@postLogin'
	));

	Route::get('forgot-password',array(
		'as' 		=> 'auth.forgot-password',
		'uses'	=> 'AuthController@getForgotPassword'
	));

	Route::post('forgot-password',array(
		'as' 		=> 'auth.forgot-password.process',
		'uses'	=> 'AuthController@postForgotPassword'
	));

	Route::get('forgot-password/t/{token}',array(
		'as' 		=> 'auth.change-forgot-password',
		'uses'	=> 'AuthController@getChangeForgotPassword'
	));

	Route::post('forgot-password/t/{token}',array(
		'as' 		=> 'auth.change-forgot-password.process',
		'uses'	=> 'AuthController@postChangeForgotPassword'
	));

});