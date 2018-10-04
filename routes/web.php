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
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Actual user settings
Route::get('/settings', 'UserController@settingsEdit')->name('sidebar.users.settings');
Route::post('/settings', 'UserController@settingsUpdate')->name('update-settings');

// Users
Route::resource('users', 'UserController');
Route::get('/users', 'UserController@index')->name('users');
Route::get('/user/ask-delete/{id}', 'UserController@askDelete')->name('sidebar.users.ask-delete');
Route::get('/user/edit/{id}', 'UserController@edit')->name('sidebar.users.edit');
Route::post('/user/edit/{id}', 'UserController@update')->name('update-user');

// Owners
Route::resource('owners', 'OwnerController');
Route::get('/owners', 'OwnerController@index')->name('owners');
Route::get('/owners-create', 'OwnerController@create')->name('owners.create');
Route::get('/owners/ask-delete/{id}', 'OwnerController@askDelete')->name('sidebar.owners.ask-delete');
Route::get('/owners/edit/{id}', 'OwnerController@edit')->name('sidebar.owners.edit');
Route::post('/owners/edit/{id}', 'OwnerController@update')->name('update-owner');
