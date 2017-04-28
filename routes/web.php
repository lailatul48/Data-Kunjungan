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

Route::get('/', function () {
    return view('pages.dashboard');
})->name('page.dashboard');

Route::get('/list-users', function () {
    return view('pages.list-users');
})->name('page.list-users');

Route::get('/list-visitors', function () {
    return view('pages.list-visitors');
})->name('page.list-visitors');

Route::get('/list-logs', function () {
    return view('pages.list-logs');
})->name('page.list-logs');

Route::get('/create-users', function () {
    return view('pages.create-users');
})->name('page.create-users');

Route::get('/create-visitors', function () {
    return view('pages.create-visitors');
})->name('page.create-visitors');

Route::get('/create-logs', function () {
    return view('pages.create-logs');
})->name('page.create-logs');

Route::get('/edit-users', function () {
    return view('pages.edit-users');
})->name('page.edit-users');

Route::get('/edit-visitors', function () {
    return view('pages.edit-visitors');
})->name('page.edit-visitors');

Route::get('/edit-logs', function () {
    return view('pages.edit-logs');
})->name('page.edit-logs');