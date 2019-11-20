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
// Route::get('password/reset', 'Auth\RegistrerController@showRegistrationForm')->name

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Esas rutas las agregue de prueba, para comprobar lo de urgencias
 */
Route::post('dates/urgency', 'DateController@storeUrgency')->name('dates.urgency.store');
Route::get('dates/urgency', 'DateController@createUrgency')->name('dates.urgency.create');

Route::get('/test', 'HomeController@test');
Route::get('/pdf', function ()
{
    return view('pdf.date');
});
