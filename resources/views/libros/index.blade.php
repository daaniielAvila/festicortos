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
    <h1>Listado de libros</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Editorial</th>
                <th>Precio</th>
                <th><a href="{{('libros.create') }}"><button>Insertar</button></a></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($libros as $libro)
                <tr>
                    <td>{{ $libro["titulo"] }}</td>
                    <td>{{ $libro["editorial"] }}</td>
                    <td>{{ $libro["precio"] }}</td>

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