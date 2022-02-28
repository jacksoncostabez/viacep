<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\ViaCepController@index')->name('viacep.index');
Route::get('/logadouro', 'App\Http\Controllers\ViaCepController@logadouro')->name('viacep.logadouro');
Route::get('/automatico', 'App\Http\Controllers\ViaCepController@automatico')->name('viacep.automatico');
Route::post('/consultar-logadouro', 'App\Http\Controllers\ViaCepController@consultarLogadouro')->name('viacep.consultarLogadouro');
Route::post('/consultar-cep', 'App\Http\Controllers\ViaCepController@consultarCEP')->name('viacep.consultarCEP');
