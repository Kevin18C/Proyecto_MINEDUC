<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlcatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CatedraticoController;
use App\Http\Controllers\TutelarController;
use App\Http\Controllers\alescController;
use App\Http\Controllers\AlgraController;
use App\Http\Controllers\CalendarioDeExamenController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\horarioController;
use App\Http\Controllers\examenesController;
use App\Http\Controllers\ReportesController;

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

//Ruta para mostrar el calendario de examenes
Route::get('/examenes', [ExamenController::class, 'mostrarExamenes'])->name('examenes.index');



Route::delete('/alumnos/{id}', [AlumnoController::class, 'eliminar'])->name('alumnos.eliminar');


Route::get('/tutores/create',[TutelarController::class,'create'])->name('tutores.create');
Route::post('/tutores', [TutelarController::class,'store'])->name('tutores.store');
Route::delete('/tutores/{id}', [TutelarController::class, 'destroy'])->name('tutores.destroy');


Route::get('/catedraticos/create',[CatedraticoController::class, 'create'])->name('catedraticos.create');
Route::post('/catedraticos',[CatedraticoController::class, 'store'])->name('catedraticos.store');
Route::delete('/catedraticos/{id}',[CatedraticoController::class,'destroy'])->name('catedraticos.destroy');

Route::get('/reportes', [ReportesController::class, 'index'])->name('reportes.index');


Route::get('/reportes/alumnos', [ReportesController::class, 'reporteAlumnos'])->name('reportes.alumnos');
Route::get('/reportes/escuelas', [ReportesController::class, 'reporteEscuelas'])->name('reportes.escuelas');

Route::get('/municipios/{departamento}', [ReportesController::class, 'getMunicipios']);

Route::get('/municipios/{departamento}', [ReportesController::class, 'getMunicipios']);
Route::get('/escuelas/{municipio}', [ReportesController::class, 'getEscuelas']);
Route::get('/escuelas/departamento/{departamento}', [ReportesController::class, 'getEscuelasPorDepartamento']);

Route::get('/reportes/catedraticos', [ReportesController::class, 'reporteCatedraticos'])->name('reportes.catedraticos');
Route::get('/reportes/getMunicipios/{departamento_id}', [ReportesController::class, 'getMunicipios'])->name('reportes.getMunicipios');
Route::get('/reportes/getEscuelas/{municipio_id}', [ReportesController::class, 'getEscuelas'])->name('reportes.getEscuelas');
Route::get('/reportes/getEscuelasPorDepartamento/{departamento_id}', [ReportesController::class, 'getEscuelasPorDepartamento'])->name('reportes.getEscuelasPorDepartamento');


Route::get('/Actividades/index', [ActividadController::class, 'mostrarCalendario'])->name('Actividades.index');


Route::get('/actividades/create', [ActividadController::class, 'create'])->name('actividades.create');
Route::post('/actividades', [ActividadController::class, 'store'])->name('actividades.store');


