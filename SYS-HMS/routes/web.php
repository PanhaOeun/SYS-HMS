hp<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'DashbordController@index')->name('dashboard');


//Route::group(['middleware' => ['auth']], function() {
//
//    // User Route
//    Route::get('user/logout','UsersController@logout');
//    Route::get('user','UsersController@index');
//    Route::resource('user', 'UsersController')->except(['destory']);
//    Route::get('user/create','UsersController@create')->name('user.create');
//    Route::post('user/save','UsersController@store')->name('user.save');
//    Route::get('user/delete/{id}','UsersController@delete')->name('user.delete');
//
//});
