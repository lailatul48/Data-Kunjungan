<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// //Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::resource('log','LogController');
Route::resource('users','UsersController');
Route::post('post-login', 'Auth\LoginController@postLogin')->name('api.login');
Route::get('logout', 'Auth\LoginController@getLogout')->name('api.logout');