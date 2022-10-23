<?php

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
Route::get('/', 'UsuarioController@getUsers')->name('getUsers');
Route::get('/users', 'UsuarioController@getUsers')->name('getUsers');
Route::get('/users/create', 'UsuarioController@create')->name('create');
Route::post('/users', 'UsuarioController@store')->name('store');
Route::get('/users/create/{id}', 'UsuarioController@getUsers')->name('getUserById');
Route::put('/users/{id}', 'UsuarioController@update')->name('update');
Route::delete('/users/{id}', 'UsuarioController@destroy')->name('delete');
