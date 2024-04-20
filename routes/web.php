<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta para mostrar la lista de alumnos
Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/alumnos/create', 'AlumnoController@create')->name('alumnos.create');

