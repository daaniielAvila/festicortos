<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autores;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         
        $autores = Autores::get();
        return view('autores.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autores.create');    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Autores::create([
            'nombre' => $request->input('nombre'),
            'nacimiento' => $request->input('nacimiento'),
           

        ]);
    
        return redirect()->route('autores.index')->with('success', 'Autor guardado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $autor = Autores::findOrFail($id);
        return view('autores.edit', compact('autor'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    
        $autor = Autores::findOrFail($id);
    
        $autor->nombre = $request->input('nombre');
        $autor->nacimiento = $request->input('nacimiento');
        $autor->save();
    
        return redirect()->route('autores.index')->with('success', 'Autor actualizado exitosamente');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Autores::findOrFail($id)->delete();
$autores = Autores::get();
return view('autores.index', compact('autores')); 
    }
}
