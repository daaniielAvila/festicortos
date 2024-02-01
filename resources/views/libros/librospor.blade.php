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

<h1>Libros por Autor</h1>

<form id="formu" method="GET" action="{{ route('libros.librospor') }}">
    @csrf
        
    <label for="id_autor">Selecciona un Autor:</label>
    <select name="id_autor" id="id_autor" required>
        @foreach($autores as $autor)
            <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
        @endforeach
    </select>
    <button type="submit">Mostrar Libros</button>
</form>


        <h2>{{ $autor->nombre }}</h2>

    @if(count($librosAutor) > 0)
        <ul>
            @foreach($librosAutor as $libro)
                <li>{{ $libro->titulo }}</li>
            @endforeach
        </ul>
    @else
        <p>No hay libros disponibles para este autor.</p>
    @endif

    <a href="{{ route('libros.index') }}">Volver</a>
</body>
</html>
