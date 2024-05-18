<?php

use App\Http\Controllers\AlcatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CatedraticoController;
use App\Http\Controllers\TutelarController;
use App\Http\Controllers\alescController;
use App\Http\Controllers\AlgraController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\horarioController;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Rutas para los alumnos
Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/alumnos/create', [CreateController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos', [CreateController::class, 'store']);

// Ruta para mostrar la lista de catedráticos
Route::get('/catedraticos', [CatedraticoController::class, 'index'])->name('catedraticos.index');

// Ruta para mostrar la lista de tutores
Route::get('/tutores', [TutelarController::class, 'index'])->name('tutores.index');

// Ruta para mostrar la lista de escuelas y sus alumnos
Route::get('/alumnos/alesc', [alescController::class, 'index'])->name('alumnos.alesc');

// Ruta para mostrar la lista de escuelas y su cantidad de alumnos por grado
Route::get('/alumnos.algra',[AlgraController::class,'index'])->name('alumnos.algra');

// Ruta para mostrar la cantidad de alumnos por catedratico
Route::get('/catedraticos.alcat',[AlcatController::class,'index'])->name('catedraticos.alcat');

//Ruta para mostrar el horario
//Route::get('/horarios', [horarioController::class, 'index'])->name('horarios.index');
Route::get('/horario', [horarioController::class, 'index'])->name('horarios.index');



Route::delete('/alumnos/{id}', [AlumnoController::class, 'eliminar'])->name('alumnos.eliminar');


Route::get('/tutores/create',[TutelarController::class,'create'])->name('tutores.create');
Route::post('/tutores', [TutelarController::class,'store'])->name('tutores.store');
Route::delete('/tutores/{id}', [TutelarController::class, 'destroy'])->name('tutores.destroy');


Route::get('/catedraticos/create',[CatedraticoController::class, 'create'])->name('catedraticos.create');
Route::post('/catedraticos',[CatedraticoController::class, 'store'])->name('catedraticos.store');
Route::delete('/tutores/{id}',[CatedraticoController::class,'destroy'])->name('catedraticos.destroy');
