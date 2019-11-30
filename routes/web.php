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
Route::get('/icons', function () {
    return view('icons');
})->name('icons');

Route::get('/users/export', 'UserController@export')->name('users.export');
Route::get('/dependencies/export', 'DependencyController@export')->name('dependencies.export');
Route::get('/patients/export', 'PatientController@export')->name('patients.export');
Route::get('/dates/export', 'DateController@export')->name('dates.export');
Route::get('/causes/export', 'CauseController@export')->name('causes.export');

Route::resources([
    'home' => 'HomeController',
    'users' => 'UserController',
    'dates' => 'DateController',
    'causes' => 'CauseController',
    'doctors' => 'DoctorController',
    'patients' => 'PatientController',
    'dependencies' => 'DependencyController'
]);
// Password Reset Routes
// Route::get('password/reset', 'Auth\RegistrerController@showRegistrationForm')->name('password.reset');
Route::prefix('fetch')->group(function ()
{
    Route::post('user', 'UserController@fetch')->name('fetch.user');
    Route::post('patient', 'PatientController@fetch')->name('fetch.patient');
    Route::post('zip_codes', 'DateController@fetch_zip_codes')->name('fetch.zip_codes');
    Route::post('date', 'DateController@fetch')->name('fetch.date');
});

// Route::post('/fetch/user', 'UserController@fetchUser')->name('fetch.user');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pdf/{date}', 'PdfController@print')->name('pdf');
