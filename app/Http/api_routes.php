<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/


Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

Route::post('registrar','UserController@create');


/*
Route::get('login/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\AuthController@handleProviderCallback');
*/


Route::group(['middleware' => ['oauth']], function () {
    Route::resource('user', 'UserController@user');
    Route::resource('articulo', 'ArticuloController');
    Route::resource('comercio', 'ComercioController');
    Route::resource('envio', 'EnvioController');

});


	//Route::resource('articulo', 'ArticuloController');
	//Route::resource('producto', 'ProductoController');
	 




