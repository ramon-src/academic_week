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
Route::group(['namespace' => 'Web'], function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('/', function () {
        return view('welcome');
    });

    Route::group(['prefix' => 'inscricao'], function () {
        Route::get('/', 'RegistrationController@index')->name('web.inscricao');
        Route::post('/', 'RegistrationController@create')->name('web.inscricao.salvar');
    });
});
