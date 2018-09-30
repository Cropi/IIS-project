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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/{pattern}/{example}', function ($pattern, $example) {
    return view('patternfly.'.$pattern.'.'.$example);
});


Auth::routes();


// Home
Route::resource('homes', 'HomeController');
Route::get('/home', 'HomeController@index');


// Users
Route::resource('users', 'UserController');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/user/ask-delete/{id}', 'UserController@askToDestory')->name('sidebaroptions.users.destroy-user-ask');
Route::get('/user/edit/{id}', 'UserController@edit')->name('sidebaroptions.users.edit');


// Owners


// Medicines


// Animals


// Treatments
