<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CatedraticoController;
use App\Http\Controllers\TutelarController;
use App\Http\Controllers\alescController;
use App\Http\Controllers\AlgraController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Rutas para los alumnos
Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');

// Ruta para mostrar la lista de catedráticos
Route::get('/catedraticos', [CatedraticoController::class, 'index'])->name('catedraticos.index');

// Ruta para mostrar la lista de tutores
Route::get('/tutores', [TutelarController::class, 'index'])->name('tutores.index');

// Ruta para mostrar la lista de escuelas y sus alumnos
Route::get('/alumnos/alesc', [alescController::class, 'index'])->name('alumnos.alesc');

// Ruta para mostrar la lista de escuelas y su cantidad de alumnos por grado
Route::get('/alumnos.algra',[AlgraController::class,'index'])->name('alumnos.algra');
