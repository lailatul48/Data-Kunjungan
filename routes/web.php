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

Route::get('/', 'HomeController@dashboard')->name('page.dashboard');


// Route::get('/','Auth\LoginController@getLogin')->name('landingpage');
// Route::get('/login','Auth\LoginController@getLogin')->name('page.login');

Route::get('/users','Pages\UsersController@index')->name('page.list-users');
Route::get('/users/create','Pages\UsersController@create')->name('page.create-users');
Route::get('/users/{id}/edit','Pages\UsersController@edit')->name('page.edit-users');

Route::get('/logs','Pages\LogsController@index')->name('page.list-logs');
Route::get('/logs/create','Pages\LogsController@create')->name('page.create-logs');
Route::get('/logs/{id}/edit','Pages\LogsController@edit')->name('page.edit-logs');

Route::get('/landingpage', ['as' => 'page.landingpage', 'uses' => 'PageController@getlandingpage']);



Auth::routes();

Route::get('/home', 'HomeController@index');
