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
    <h1>Listado de libros</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Editorial</th>
                <th>Precio</th>
                <th>Autor</th>


                <th><a href="{{route('libros.create') }}"><button>Insertar</button></a></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @forelse ($libros as $libro)
                <tr>
                    <td>{{ $libro["titulo"] }}</td>
                    <td>{{ $libro["editorial"] }}</td>
                    <td>{{ $libro["precio"] }}</td>
                    <td>  @foreach($autores as $autor)
                        @if($autor->id == $libro["id_autor"])
                            {{ $autor->nombre }}
                        @endif
                    @endforeach
                    <td><form action="{{ route('libros.destroy', $libro) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="botonborrar" id="botonborrar">Borrar</button>
                        </form>
                    </td>
                    <td><form action="{{ route('libros.edit', $libro) }}" method="POST">
                        @method('GET')
                        @csrf
                        <button class="botonmodificar" id="botonmodificar">Modificar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No se encontraron libros</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>