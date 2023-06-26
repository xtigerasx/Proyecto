<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\Reportes;

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

Route::get('/dashboard', [HomeController::class, 'index']);
// --------------------------------Facultades-----------------------------------------
Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFac');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'])->name('eliminaFac');
Route::get('/facultades/editar/{id}', [Facultades::class, 'form_edita'])->name('form_editar');
Route::post('/facultades/registrar',[Facultades::class, 'registrar']);
Route::post('/facultades/actualizar/{id}',[Facultades::class, 'actualizar'])->name('actualiza_facultad');
// --------------------------------Programas-----------------------------------------
Route::get('/programas/listado', [Programas::class, 'index'])->name('listadoProg');
Route::get('/programas/registrar', [Programas::class, 'form_registro']);
Route::get('/programas/eliminar/{id}', [Programas::class, 'eliminar'])->name('eliminaProg');
Route::get('/programas/editar/{id}', [Programas::class, 'form_edita'])->name('form_editar');
Route::post('/programas/registrar',[Programas::class, 'registrar']);
Route::post('/programas/actualizar/{id}',[Programas::class, 'actualizar'])->name('actualiza_programa');
// --------------------------------Profesores-----------------------------------------
Route::get('/profesores/listado', [Profesores::class, 'index'])->name('listadoProf');
Route::get('/profesores/registrar', [Profesores::class, 'form_registro']);
Route::get('/profesores/eliminar/{id}', [Profesores::class, 'eliminar'])->name('eliminaProf');
Route::get('/profesores/editar/{id}', [Profesores::class, 'form_edita'])->name('form_editar');
Route::post('/profesores/registrar',[Profesores::class, 'registrar']);
Route::post('/profesores/actualizar/{id}',[Profesores::class, 'actualizar'])->name('actualiza_profesor');
// --------------------------------Estudiantes-----------------------------------------
Route::get('/estudiantes/listado', [Estudiantes::class, 'index'])->name('listadoEst');
Route::get('/estudiantes/registrar', [Estudiantes::class, 'form_registro']);
Route::get('/estudiantes/eliminar/{id}', [Estudiantes::class, 'eliminar'])->name('eliminaEst');
Route::get('/estudiantes/editar/{id}', [Estudiantes::class, 'form_edita'])->name('form_editar');
Route::post('/estudiantes/registrar',[Estudiantes::class, 'registrar']);
Route::post('/estudiantes/actualizar/{id}',[Estudiantes::class, 'actualizar'])->name('actualiza_estudiante');
// --------------------------------Calificaciones-----------------------------------------
Route::get('/regnotas/listado', [Calificaciones::class, 'index']);
Route::get('/reportes/listado', [Reportes::class, 'index']);





