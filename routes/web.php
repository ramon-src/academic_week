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
    Route::get('evento/{name}/{id}', 'ScheduleViewController@index')->name('web.event.schedule');
});

Route::group(['namespace' => 'Api'], function () {
    Route::get('home', 'DashboardController@index');
    Route::get('dashboard', 'DashboardController@index');
    Route::get('evento/{name}/{id}/programacao', 'EventScheduleController@index')->name('event.schedule');
    Route::get('evento/{name}/np/{event_schedule_id}/dia/{date}', 'EventScheduleController@schedule_day')->name('event.schedule.day');
    Route::get('participar/programacao/{event_schedule_id}/palestra/{lecture_id}', 'EventScheduleController@subscribe')->name('event.schedule.subscribe');
    Route::get('desinscrever/palestra/{lecture_id}', 'EventScheduleController@unsubscribe');
    Route::get('get/palestras/{event_schedule_id}', 'EventScheduleController@lecturesSubscribed');
    Route::get('imgs/{slug}', [
        'as' => 'images.show',
        'uses' => 'ImageController@show',
        'middleware' => 'auth',
    ]);

    // Admin Routes...
    Route::group(['namespace'=>'Users\Admin', 'middleware'=>'can:index,AcademicDirectory\Domains\Users\User'], function (){
        Route::get('usuarios', 'UsersController@index')->name('users.index');
        Route::post('usuarios/pesquisaPorRg', 'UsersController@searchByRg')->name('search.user.by.rg');
        Route::post('usuarios/ativarNoEvento', 'UsersController@activeUserInEvent')->name('active.user.in.event');
        Route::get('relatorios/evento/{id}/gerar-lista-usuarios-participando', 'EventReportController@getReportUsersSubscribedInAllLecturesInEvent')->name('gen.report.participants');

    });
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
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('gerar_nova_senha', 'Auth\ResetPasswordController@reset');



