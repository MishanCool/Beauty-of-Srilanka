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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home.home');
});

// Route::get('/test', function () {
//     return view('test.test');
// });

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::post('/new_place', 'NewPlaceController@store')->name('new_place');

Route::get('/', 'NewPlaceController@display');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
