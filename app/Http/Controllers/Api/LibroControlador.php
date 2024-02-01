<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $libros = Libro::get();
        return $libros;
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
{
    if ($libro) {
        return $libro;
    } else {
        return response()->json(['error' => 'Libro no encontrado'], 404);
    }
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
