<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PrincipalController::class,'index'])->name('index');
Route::get('/creadores',[PrincipalController::class,'creadores'])->name('creadores');
Route::post('/guardarP',[Principalcontroller::class,'guardarP'])->name('guardarP');
Route::post('/guardarS',[Principalcontroller::class,'guardarS'])->name('guardarS');
Route::get('/peliculas',[PrincipalController::class,'peliculas'])->name('peliculas');
Route::get('/series',[PrincipalController::class,'series'])->name('series');
Route::delete('serie/eliminar/{id}', [PrincipalController::class, 'eliminar'])->name('eliminar');
Route::delete('/pelicula/eliminar/{id}', [PrincipalController::class, 'eliminar1'])->name('eliminar1');
Route::get('/editarS/{id}', [PrincipalController::class, 'editarS'])->name('editarS');
Route::get('/editarP/{id}', [PrincipalController::class, 'editarP'])->name('editarP');
Route::put('actualizarS/{id}', [PrincipalController::class, 'actualizarS'])->name('actualizarS');
Route::put('actualizarP/{id}', [PrincipalController::class, 'actualizarP'])->name('actualizarP');
Route::get('/agregarP',[PrincipalController::class,'agregarP'])->name('agregarP');
Route::get('/agregarS',[PrincipalController::class,'agregarS'])->name('agregarS');
Route::get('/buscarS', [PrincipalController::class, 'buscarS'])->name('buscarS');
