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

//Route::group(['can' => 'admin'], function () {
//    Route::get('/home', 'HomeController@index')->name('home');
//});
//
//Auth::routes(['register' => false]);
Route::get('/', function () {
    return [1, 2, 3, 4, 5];
});