<?php
Route::group(array('before' => 'installed'),function(){

	Route::get('install',array(
		'as' 		=> 'install',
		'uses'	=> 'InstallController@getInstall'
	));

	Route::post('install',array(
		'as' 		=> 'install.process',
		'uses'	=> 'InstallController@postInstall'
	));

});