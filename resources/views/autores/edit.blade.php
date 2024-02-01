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

    <h1>Editar Autor</h1>
<div id="formulario">
    <form id="formu" method="POST" action="{{ route('autores.update', $autor->id) }}">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $autor->nombre }}" required>

        <label for="nacimiento">Nacimiento:</label>
        <input type="number" name="nacimiento" id="nacimiento" value="{{ $autor->nacimiento }}" required>

        <button type="submit">Guardar cambios</button>
    </form>
</div>
</body>
</html>
