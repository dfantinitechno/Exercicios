<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'UsuarioController@getUsers')->name('getUsers');
Route::get('/users', 'UsuarioController@getUsers')->name('getUsers');
Route::get('/users/create', 'UsuarioController@create')->name('create');
Route::post('/users', 'UsuarioController@store')->name('store');
Route::get('/users/create/{id}', 'UsuarioController@getUsers')->name('getUserById');
Route::put('/users/{id}', 'UsuarioController@update')->name('update');
Route::delete('/users/{id}', 'UsuarioController@destroy')->name('delete');
