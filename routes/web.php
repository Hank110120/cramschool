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



Route::get('/backend/bulletin_boards/edit', function () {
    return view('backend/bulletin_boards/edit');
});

Route::get('/backend/carousels/edit', function () {
    return view('backend/carousels/edit');
});

Route::get('/backend/classrooms/index', function () {
    return view('backend/classrooms/index');
});
Route::get('/backend/classrooms/create', function () {
    return view('backend/classrooms/create');
});

Route::group(['prefix' => 'backend', 'namespace' => 'Backend'], function () {
    Route::name('backend.')->group(function () {
        Route::resource('classrooms', 'ClassroomsController');
    });
});


Route::get('/backend/teachers/index', function () {
    return view('backend/teachers/index');
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

Route::group(['prefix' => 'backend', 'namespace' => 'Backend'], function () {
    Route::name('backend.')->group(function () {
        Route::resource('users', 'UsersController');
    });
});