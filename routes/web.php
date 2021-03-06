<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/users/dashboard', 'UsersController@index')->name('users.index');
Route::get('/users', 'UsersController@show')->name('users');
