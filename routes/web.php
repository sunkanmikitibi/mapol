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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
 Route::get('/home', 'HomeController@index')->name('home');
 Route::resource('mopol', 'MopolController');
Route::resource('officers', 'OfficerController');
Route::resource('users', 'UsersController');
Route::resource('support-tickets', 'TicketsController');
Route::resource('category', 'CategoryController');

});

