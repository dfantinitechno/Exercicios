<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/users', 'UsuarioController@store')->name('store');
Route::put('/users/{id}', 'UsuarioController@update')->name('update');
Route::delete('/users/{id}', 'UsuarioController@destroy')->name('delete');