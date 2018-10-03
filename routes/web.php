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


Route::get('/', [ 'middleware' => 'auth', 'uses' => 'HomeController@index' ]);

Route::get('/{pattern}/{example}', function ($pattern, $example) {
    return view('patternfly.'.$pattern.'.'.$example);
});

Route::get('/home', 'HomeController@index');

Auth::routes();


// Users
Route::resource('users', 'UserController');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/user/ask-delete/{id}', 'UserController@askDelete')->name('sidebar.users.ask-delete');
Route::get('/user/edit/{id}', 'UserController@edit')->name('sidebar.users.edit');
Route::post('/user/edit/{id}', 'UserController@update')->name('update-user');

// Owners
Route::resource('owners', 'OwnerController');
Route::get('/owners', 'OwnerController@index')->name('owners');
