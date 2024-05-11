<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/alumnos', 'App\Http\Controllers\AlumnoController@index')->name('alumnos.index');
Route::get('/alumnos/create', 'App\Http\Controllers\AlumnoController@create')->name('alumnos.create');

Route::get('/catedraticos', 'App\Http\Controllers\CatedraticoController@index')->name('catedraticos.index');
Route::get('/tutores', 'App\Http\Controllers\TutelarController@index')->name('tutores.index');


use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

