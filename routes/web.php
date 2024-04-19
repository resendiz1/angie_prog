<?php

use Illuminate\Support\Facades\Route;







Route::view('/', 'login')->name('login');

Route::view('/empresas_contratistas', 'admin.empresas_contratistas')->name('empresas.contratistas');
Route::view('/empresas_contratistas/trabajadores', 'admin.trabajadores_empresas_contratistas')->name('trabajadores.empresas.contratistas');

Route::view('/contratistas', 'contratistas.perfil')->name('contratistas.perfil');