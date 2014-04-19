<?php
Route::pattern('clientId','[0-9]');
Route::pattern('clientName','[a-Z][A-Z]');

Route::group(array('before' => 'auth'),function(){

	Route::get('dashboard',array(
		'as' 		=> 'app.dashboard',
		'uses'	=> 'DashboardController@getIndex'
	));

	Route::group(array('before' => 'clients','prefix' => 'clients'), function(){

		Route::get('/',array(
			'as' 		=> 'app.clients.index',
			'uses'	=> 'ClientsController@getIndex'
		));

		Route::get('create',array(
			'as' 		=> 'app.clients.create',
			'uses'	=> 'ClientsController@getCreate'
		));

		Route::post('create',array(
			'as' 		=> 'app.clients.store',
			'uses'	=> 'ClientsController@postStore'
		));

		Route::get('{clientId}',array(
			'as' 		=> 'app.clients.show',
			'uses'	=> 'ClientsController@getShow'
		));

		Route::get('{clientId}/edit',array(
			'as' 		=> 'app.clients.edit',
			'uses'	=> 'ClientsController@getEit'
		));

		Route::post('{clientId}/edit',array(
			'as' 		=> 'app.clients.update',
			'uses'	=> 'ClientsController@postUpdate'
		));

		Route::get('{clientId}/delete',array(
			'as' 		=> 'app.clients.delete',
			'uses'	=> 'ClientsController@getDelete'
		));

	});

});