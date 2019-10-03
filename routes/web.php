<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return redirect('login');
});

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/consulting-rooms', function () {
    return view('consulting-rooms.create');
})->name('consulting-rooms');

Route::resource('users', 'UserController');
Route::resource('causes', 'CauseController');
Route::resource('dependencies', 'DependencyController');

Route::get('/icons', function () {
    return view('icons');
})->name('icons');

