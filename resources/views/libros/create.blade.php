<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
  @include('partials.nav');

<div id="formulario">
    <form id="formu" method="POST" action="{{ route('libros.store') }}">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
    
        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial" id="editorial" required>
        
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" required>
        
        <label for="id_autor">Autor:</label>
        <select name="id_autor" id="id_autor" required>
            @foreach($autores as $autor)
                <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
            @endforeach
        </select>
        <br>
        <br>
    
        <button type="submit">Guardar</button>
    </form>
</div>
    
</body>
</html>
