<?php

use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorFesticortos;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\Api\LibroControlador;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('cortos', [ControladorFesticortos::class, 'index'])->name('listadecortos');
Route::get('cortos/{id}', [ControladorFesticortos::class, 'show'])->name('cortodetallado');



Route::get('/libros/create', [LibroController::class, 'create'])->name('libros.create');
Route::post('/libros/store', [LibroController::class, 'store'])->name('libros.store');

Route::resource('autores',AutorController::class);

Route::get('/autores/create', [AutorController::class, 'create'])->name('autores.create');
Route::post('/autores/store', [AutorController::class, 'store'])->name('autores.store');
Route::get('/autores/{id}/edit', [AutorController::class, 'edit'])->name('autores.edit');
Route::put('/autores/{id}', [AutorController::class, 'update'])->name('autores.update');
Route::get('/libros/librosyautor/{id}', [LibroController::class, 'librosyautor'])->name('libros.librosyautor');
Route::get('/libros/librospor', [LibroController::class, 'librospor'])->name('libros.librospor');
Route::apiResource('apilibros', LibroControlador::class);
Route::get('/api/libros', [LibroControlador::class, 'index'])->name('libros.index');
Route::get('/api/libros/{libro}', [LibroControlador::class, 'show'])->name('libros.show');


Route::resource('libros',LibroController::class);
