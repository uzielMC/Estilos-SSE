<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('Empresas')->group(function () {
    Route::get('/', function() {
        return view('Registro_Empresas.Ingreso_perfil_de_la_empresa');
    });
});