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

Route::get('/lg', function () {
    return view('auth.login2');
});

Auth::routes();
Route::get('/barcode', 'HomeController@barcode')->name('barcode');
Route::post('/barcode', 'HomeController@barcodeSubmit')->name('barcodeSubmit');
Route::get('/check/messages', 'AdminController@index')->name('home');
Route::get('/check/messages/{id}', 'AdminController@show')->name('show');
Route::get('/','HomeController@showMessagesForm')->name('userpage');
Route::post('/','HomeController@SubmitMessage')->name('form');
