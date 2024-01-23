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
    
        return redirect()->route('autores.create')->with('success', 'Autor guardado');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    dd($request);
    $autor = Autores::findOrFail($id);

    $autor->update([
        'nombre' => $request->input('nombre'),
        'nacimiento' => $request->input('nacimiento'),
    ]);

    return redirect()->route('autores.update')->with('success', 'Autor modificado');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Autores::findOrFail($id)->delete();
$Autores = Autores::get();
return view('Autores.index', compact('Autores')); 
    }
}
