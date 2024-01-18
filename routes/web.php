<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorFesticortos;

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


Route::get('home/listadelibros', function() {
    $libros = array(
    array("titulo" => "El juego de Ender",
    "autor" => "Orson Scott Card"),
    array("titulo" => "La tabla de Flandes",
"autor" => "Arturo Pérez Reverte"),
array("titulo" => "La historia interminable",
"autor" => "Michael Ende"),
array("titulo" => "El Señor de los Anillos",
"autor" => "J.R.R. Tolkien")
);
return view('listadelibros', compact('libros'));
})->name('listadelibros');