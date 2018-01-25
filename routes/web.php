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

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('donor/home', 'DonorController@index')->name('donor_home');

Route::get('bank/home', 'BloodbankController@index')->name('bank_home');

Route::post('search', 'UserController@search')->name('search');

Route::post('donor/home', 'DonorController@status')->name('donor_availability');
