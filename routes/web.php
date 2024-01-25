<?php

use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorFesticortos;
use App\Http\Controllers\LibroController;

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

Route::resource('libros',LibroController::class);


Route::get('/libros/create', [LibroController::class, 'create'])->name('libros.create');
Route::post('/libros/store', [LibroController::class, 'store'])->name('libros.store');

Route::resource('autores',AutorController::class);

Route::get('/autores/create', [AutorController::class, 'create'])->name('autores.create');
Route::post('/autores/store', [AutorController::class, 'store'])->name('autores.store');
Route::get('/autores/{id}/edit', [AutorController::class, 'edit'])->name('autores.edit');
Route::put('/autores/{id}', [AutorController::class, 'update'])->name('autores.update');

