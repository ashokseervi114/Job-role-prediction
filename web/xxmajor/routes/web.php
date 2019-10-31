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

Auth::routes();

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'HomeController@show')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/profiles/{user}/detail', 'ProfilesController@index')->name('profile-detail');
Route::get('/profiles/{user}', 'ProfilesController@index')->name('profile');
Route::get('/profiles/create', 'ProfilesController@create')->name('profile-create');
Route::post('/profiles', 'ProfilesController@store');
Route::get('/profiles/{user}/detail', 'ProfilesController@show')->name('profile-detail');
Route::get('profiles/{user}/edit', 'ProfilesController@edit');

