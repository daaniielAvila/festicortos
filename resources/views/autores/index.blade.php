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
    <h1>Listado de autores</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nacimiento</th>
                <th><a href="{{route('autores.create') }}"><button>Insertar</button></a></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($autores as $autor)
                <tr>
                    <td>{{ $autor["nombre"] }}</td>
                    <td>{{ $autor["nacimiento"] }}</td>
                    <td><form action="{{ route('autores.destroy', $autor) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="botonborrar" id="botonborrar">Borrar</button>
                        </form>
                    </td>
                    <td><form action="{{ route('autores.edit', $autor) }}" method="POST">
                        @method('GET')
                        @csrf
                        <button class="botonmodificar" id="botonmodificar">Modificar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No se encontraron autores</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>