<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="{{ route('libros.store') }}">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
    
        <label for="autor">Editorial:</label>
        <input type="text" name="editorial" id="editorial" required>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" required>
    
        <button type="submit">Guardar</button>
    </form>
    
    
</body>
</html>