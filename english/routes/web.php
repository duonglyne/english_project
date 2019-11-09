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
    return view('frontend.homepage.homepage');
});
Route::get('/test', function () {
    return view('frontend.homepage.test');
});
Route::get('/register', function () {
    return view('frontend.account.register');
});
Route::get('/login', function () {
    return view('frontend.account.login');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
