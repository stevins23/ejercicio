<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\LibroController;


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
    return view('index');
});

Route::get("alumnos/listado_pdf", [AlumnoController::class, 'listadoPdf'])->name("alumnos.listado_pdf");
Route::resource("alumnos", AlumnoController::class);


Route::get("recetas/listado_pdf", [RecetaController::class, 'listadoPdf'])->name("recetas.listado_pdf");
Route::resource("recetas", RecetaController::class);


Route::get("libros/listado_pdf", [LibroController::class, 'listadoPdf'])->name("libros.listado_pdf");
Route::resource("libros", LibroController::class);