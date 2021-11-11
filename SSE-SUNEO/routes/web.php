<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('Empresas')->group(function () {
    Route::get('/', 'RegistroEmpresaController@view');
    Route::post('/create', 'RegistroEmpresaController@create')->name('Empresa.create');
});