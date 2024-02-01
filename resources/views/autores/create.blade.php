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
    <form id="formu" method="POST" action="{{ route('autores.store') }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
    
        <label for="autor">Nacimiento:</label>
        <input type="number" name="nacimiento" id="nacimiento" maxlength="4" required>

    
        <button type="submit">Guardar</button>
    </form>
</div>
    
</body>
</html>