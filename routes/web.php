<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::group([ 'namespace' => 'Login', /*'middleware' => 'LoginAuthMiddleware'*/ ], function () {

    Route::get('login', [ 'as' => 'login', 'uses' => 'UserLoginController@loginView' ]);
    Route::post('login', [ 'as' => 'login_post', 'uses' => 'UserLoginController@login' ]);
    Route::get('reset-password', [ 'as' => 'reset-password', 'uses' => 'UserLoginController@restPassword' ]);

});

Route::group([ 'namespace' => 'Data', 'middleware' => 'LoginAuthMiddleware' ], function () {

    require "app.main.routes.php";

});