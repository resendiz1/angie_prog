<?php

use App\Http\Controllers\contratistasController;
use App\Http\Controllers\sesionesController;
use Illuminate\Support\Facades\Route;







Route::view('/', 'login')->name('login');

Route::view('/empresas_contratistas/trabajadores', 'admin.trabajadores_empresas_contratistas')->name('trabajadores.empresas.contratistas');
Route::view('/agregar_empresas', 'admin.empresas_agregar')->name('empresas.agregar');
Route::view('/contratistas', 'contratistas.perfil')->name('contratistas.perfil');





//rutas para el login 
Route::post('/', [sesionesController::class, 'login'])->name('login');

//ruta para los encargados de SEH
Route::get('/encargado/contratistas', [contratistasController::class, 'showFormContratista'])->name('show.contratistas');
Route::post('/encargado/contratistas', [contratistasController::class, 'empresa_agregar'])->name('empresa.agregar');

Route::post('/encargado/contratistas/{id}/eliminar', [contratistasController::class, 'empresa_delete'])->name('empresa.delete');

Route::patch('/encargado/contratistas/{id}/editar', [contratistasController::class, 'empresa_editar'])->name('empresa.editar');







//Rutas de el perfil de las empresa
Route::post('/contratista_agregado', [contratistasController::class, 'add_contratista'])->name('add.contratista');