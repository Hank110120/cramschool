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
    return view('welcome');
});

Route::get('/backend/companies/edit', 'CompanyController@edit');

Route::post('/backend/companies/edit', 'CompanyController@update');


// Route::post('/admin/company', 'CompanyController@update')->name('admin/company');



Route::get('/admin/bulletin_board', function () {
    return view('admin/bulletin_board');
});

Route::get('/admin/carousel', function () {
    return view('admin/carousel');
});

Route::get('/admin/classroom', function () {
    return view('admin/classroom');
});

Route::get('/admin/teacher_info', function () {
    return view('admin/teacher_info');
});

Route::get('/admin/transcript', function () {
    return view('admin/transcript');
});

Route::get('/admin/student', function () {
    return view('admin/student');
});

Route::get('/admin/password', function () {
    return view('admin/password');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix' => 'backend', 'namespace' => 'Backend'], function () {
//     Route::name('backend.')->group(function () {
//         Route::resource('users', 'UsersController');
//         // Route::get('users', 'UsersController@index');
//         // Route::get('users/create', 'UsersController@create')->name('users.create');
//         // Route::post('users', 'UsersController@store')->name('users.store');
//         // Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
//     });
// });
