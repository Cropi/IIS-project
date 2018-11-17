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

// Animals
Route::resource('animals', 'AnimalController');
Route::get('/animals', 'AnimalController@index')->name('animals');
Route::get('/animals-create', 'AnimalController@create')->name('animals.create');
Route::get('/animals/ask-delete/{id}', 'AnimalController@askDelete')->name('sidebar.animals.ask-delete');
Route::get('/animals/edit/{id}', 'AnimalController@edit')->name('sidebar.animals.edit');
Route::post('/animals/edit/{id}', 'AnimalController@update')->name('update-animal');

// Medicines
Route::resource('medicines', 'MedicineController');
Route::get('/medicines', 'MedicineController@index')->name('medicines');
Route::get('/medicines-create', 'MedicineController@create')->name('medicines.create');
Route::get('/medicines/ask-delete/{id}', 'MedicineController@askDelete')->name('sidebar.medicines.ask-delete');
Route::get('/medicines/edit/{id}', 'MedicineController@edit')->name('sidebar.medicines.edit');
Route::post('/medicines/edit/{id}', 'MedicineController@update')->name('update-medicine');

Route::post('/medicines/edit/contraindication/{id}', 'MedicineController@addContraindication')->name('add-contraindication-medicine');
Route::post('/medicines/edit/removeContraindication/{id}', 'MedicineController@removeContraindication')->name('remove-contraindication-medicine');
Route::post('/medicines/edit/types/{id}', 'MedicineController@addType')->name('add-types-medicine');
Route::post('/medicines/edit/removeType/{id}', 'MedicineController@removeType')->name('remove-type-medicine');


// Treatments
Route::resource('treatments', 'TreatmentController');
Route::get('/treatments', 'TreatmentController@index')->name('treatments');
Route::get('/treatments-create', 'TreatmentController@create')->name('treatments.create');
Route::get('/treatments/ask-delete/{id}', 'TreatmentController@askDelete')->name('sidebar.treatments.ask-delete');
Route::get('/treatments/edit/{id}', 'TreatmentController@edit')->name('sidebar.treatments.edit');
Route::post('/treatments/edit/{id}', 'TreatmentController@update')->name('update-treatment');
Route::get('/treatments/show/{id}', 'TreatmentController@show')->name('show-treatment');
Route::get('/treatments/add-prescription/{id}', 'TreatmentController@addPrescription')->name('add-prescription-medicine');
Route::post('/treatments/add-prescription/{id}', 'TreatmentController@storePrescription')->name('store-prescription-medicine');
