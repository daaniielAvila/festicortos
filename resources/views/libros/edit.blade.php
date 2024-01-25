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
      <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="{{route('home')}}">Festicortos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link text-white " aria-current="page" href="{{route('home')}}">Home</a>
              <a class="nav-link text-white " href="{{route('listadecortos')}}">Lista de cortos</a>
              <a class="nav-link text-white" href="{{route('libros.index')}}">Lista de libros</a>
              <a class="nav-link text-white" href="{{route('autores.index')}}">Lista de autores</a>

            </div>
          </div>
        </div>
      </nav>
    <h1>Editar Autor</h1>
<div id="formulario">
    <form id="formu" method="POST" action="{{ route('libros.update', $libro->id) }}">
        @csrf
        @method('PUT')

        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}" required>

        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}" required>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" value="{{ $libro->precio }}" required>

        <label for="id_autor">Autor:</label>
        <select name="id_autor" id="id_autor" value="" required>
            @foreach($autores as $autor)
                <option value="{{ $autor->id }}">{{ $autor->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Guardar cambios</button>
    </form>
</div>
</body>
</html>
