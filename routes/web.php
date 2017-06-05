<?php

Route::get('/', [
	'uses' => 'FrontController@index',
	'as'   => 'home'
	]);
Route::group(['middleware' => 'auth'], function() {

	Route::resource('hours', 'HoursController');
	Route::resource('customers', 'CustomerController');
	Route::resource('accounts', 'AccountController');
	Route::resource('histories', 'HistoryController');
	Route::resource('groupstreatments', 'GroupTreatmentController');
	Route::resource('treatments', 'TreatmentController');


	Route::get('hours/{id}/destroy',[
			'uses' => 'HoursController@destroy', 'as' =>'customers.destroy'
		]);


	Route::get('histories/{id}', 'HistoryController@getTreatments');

	Route::get('histories/{id}/index',[
			'uses' => 'HistoryController@index', 'as' =>'histories.index'
		]);


	Route::get('histories/{id}/{tooth}/edit',[
			'uses' => 'HistoryController@edit', 'as' =>'histories.edit'
		]);


	Route::get('histories/{id}/create',[
			'uses' => 'HistoryController@create', 'as' =>'histories.create'
		]);

	Route::get('histories/{id}/destroy',[
			'uses' => 'HistoryController@destroy', 'as' =>'histories.destroy'
		]);

	Route::get('accounts/{id}/create',[
			'uses' => 'AccountController@create', 'as' =>'accounts.create'
		]);

	Route::get('accounts/{id}/show',[
			'uses' => 'AccountController@show', 'as' =>'accounts.show'
		]);

	Route::get('customers/{id}/destroy',[
			'uses' => 'CustomerController@destroy', 'as' =>'customers.destroy'
		]);

	Route::get('users/{id}/destroy',[
			'uses' => 'UserController@destroy', 'as' =>'users.destroy'
		]);

});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	
	Route::resource('users', 'UserController');
	Route::get('index', [
	'uses' => 'FrontController@admin',
	'as'   => 'administrador'
	]);


});

Route::resource('login', 'LoginController');

Route::get('logout',[
	'uses' => 'LoginController@logout',
	'as'   => 'logout'
	]);
