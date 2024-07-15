<?php

use App\Http\Controllers\contratistasController;
use App\Http\Controllers\sesionesController;
use Illuminate\Support\Facades\Route;







Route::view('/', 'login')->name('login');








//rutas para el login 
Route::post('/', [sesionesController::class, 'login'])->name('login');

//ruta para los encargados de SEH

Route::view('/encargado', 'encargado.perfil')->name('perfil.encargado');

Route::get('/encargado/contratistas', [contratistasController::class, 'showFormContratista'])->name('show.contratistas')->middleware('auth:encargado');
Route::post('/encargado/contratistas', [contratistasController::class, 'empresa_agregar'])->name('empresa.agregar')->middleware('auth:encargado');

Route::post('/encargado/contratistas/{id}/eliminar', [contratistasController::class, 'empresa_delete'])->name('empresa.delete')->middleware('auth:encargado');

Route::patch('/encargado/contratistas/{id}/editar', [contratistasController::class, 'empresa_editar'])->name('empresa.editar')->middleware('auth:encargado');

Route::get('/encargado/empresas_contratistas/{id}/trabajadores', [contratistasController::class, 'ver_empresa'])->name('trabajadores.empresas.contratistas')->middleware('auth:encargado');


Route::view('/agregar_empresas', 'admin.empresas_agregar')->name('empresas.agregar')->middleware('auth');

Route::delete('/encargado/{id}/trabajador_borrado', [contratistasController::class, 'delete_contratista'])->name('delete.contratista.encargado')->middleware('auth:encargado');

Route::patch('/encargado/empresas_contratistas/autorizando/{id}', [contratistasController::class, 'autorizar_contratista'])->name('autoriza.contratista')->middleware('auth:encargado');

Route::patch('/encargado/empresas_contratistas/desautorizando/{id}', [contratistasController::class, 'desautorizar_contratista'])->name('desautorizar.contratista')->middleware('auth:encargado');

Route::get('/encargado/empresas_ver', [contratistasController::class, 'ver_empresas'])->name('ver.empresas');






//Rutas de el perfil de las empresa
Route::get('/contratistas', [sesionesController::class, 'perfil_contratistas'])->name('perfil.contratistas')->middleware('auth:empresa');
Route::post('/contratista_agregado', [contratistasController::class, 'add_contratista'])->name('add.contratista')->middleware('auth:empresa');
Route::patch('/contratistas/{id}/sua_agregado', [contratistasController::class, 'add_sua'])->name('sua.empresa')->middleware('auth:empresa');
Route::delete('/contratista/{id}/trabajador_borrado', [contratistasController::class, 'delete_contratista'])->name('delete.contratista')->middleware('auth:empresa');