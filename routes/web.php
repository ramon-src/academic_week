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
    Route::get('/', 'SiteController@index')->name('web.home');
});

Route::group(['namespace' => 'Api'], function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::get('evento/{name}/{id}/programacao', 'EventScheduleController@index')->name('event.schedule');
    Route::get('evento/{name}/np/{event_schedule_id}/dia/{date}', 'EventScheduleController@schedule_day')->name('event.schedule.day');
    Route::get('participar/programacao/{event_schedule_id}/palestra/{lecture_id}', 'EventScheduleController@subscribe')->name('event.schedule.subscribe');
    Route::get('get/palestras/{event_schedule_id}', 'EventScheduleController@lecturesSubscribed');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

// Registration Routes...
Route::get('registrar', 'Auth\RegisterController@showRegistrationForm');
Route::post('registrar', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('mostrar_link_form', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('enviar_email_nova_senha', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('nova_senha/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('gerar_nova_senha', 'Auth\ResetPasswordController@reset');



