<?php

use App\Http\Controllers\sesionesController;
use Illuminate\Support\Facades\Route;







Route::view('/', 'login')->name('login');

Route::view('/empresas_contratistas/trabajadores', 'admin.trabajadores_empresas_contratistas')->name('trabajadores.empresas.contratistas');
Route::view('/agregar_empresas', 'admin.empresas_agregar')->name('empresas.agregar');
Route::view('/contratistas', 'contratistas.perfil')->name('contratistas.perfil');




//rutas para el login 
Route::post('/', [sesionesController::class, 'login'])->name('login');