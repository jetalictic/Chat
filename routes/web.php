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
    return view('auth/login');
});

Route::get('/agent', function () {
    return view('agent');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
