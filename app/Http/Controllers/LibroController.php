<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autores;



class LibroController extends Controller
{

 
    public function index()
    {
        
        $libros = Libro::get();
        $autores = Autores::all(); 

        return view('libros.index', compact('libros', 'autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autores = Autores::all(); 
        return view('libros.create', compact('autores'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Libro::create([
            'titulo' => $request->input('titulo'),
            'editorial' => $request->input('editorial'),
            'precio'=>$request->input('precio'),
            'id_autor'=>$request->input('id_autor'),


        ]);
    
        return redirect()->route('libros.index')->with('success', 'Libro guardado');
  
    }
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $autores = Autores::all(); 

        $libro = Libro::findOrFail($id);
        return view('libros.edit', compact('libro', 'autores'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $libro = Libro::findOrFail($id);
    
        $libro->titulo = $request->input('titulo');
        $libro->editorial = $request->input('editorial');
        $libro->precio = $request->input('precio');
        $libro->id_autor  =$request->input('id_autor');

        $libro->save();
    
        return redirect()->route('libros.index')->with('success', 'Autor actualizado exitosamente');
    }
    public function destroy(string $id)
    {
Libro::findOrFail($id)->delete();
$libros = Libro::get();
return view('libros.index', compact('libros'));  
  }




  public function librosyautor($id)
  {

    $librosAutor = Libro::all();
    $autores = Autores::all();

    return view('libros.librosyautor', compact('librosAutor', 'autores'));


    //     $librosAutor = [];
    //     foreach (Libro::all() as $libro){
    //         if ($libro->id_autor == $id) $librosAutor[] = $libro;
    //     }
    //   $autor = Autores::all(); 

    //   return view('libros.librosyautor', compact('librosAutor', 'autor'));
  }
  public function librospor(Request $request) {
    $id_autor = $request->input('id_autor');
    $autor = Autores::find($id_autor);
    $librosAutor = Libro::where('id_autor', $id_autor)->get();
    $autores = Autores::all();

    return view('libros.librospor', compact('autor', 'librosAutor', 'autores'));
}




}
