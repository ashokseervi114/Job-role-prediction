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
Route::get('/profile/{user}', 'ProfilesController@show')->name('profile');
Route::get('/profiles/create', 'ProfilesController@create')->name('profile-create');
Route::get('/profiles/{user}/detail', 'ProfilesController@index')->name('profile-detail');