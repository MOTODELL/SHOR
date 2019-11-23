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

Route::resources([
    // 'home' => 'HomeController',
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
    Route::post('user', 'UserController@fetchUser')->name('fetch.user');
    Route::post('patient', 'PatientController@fetch')->name('fetch.patient');
});

// Route::post('/fetch/user', 'UserController@fetchUser')->name('fetch.user');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pdf/{date}', 'PdfController@print')->name('pdf');
