<html>
<head>
    <title>Listado de libros</title>
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
        <a class="nav-link text-white" href="{{route('listadelibros')}}">Lista de libros</a>
      </div>
    </div>
  </div>
</nav>

    <h1>Listado de libros</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($libros as $libro)
                <tr>
                    <td>{{ $libro["titulo"] }}</td>
                    <td>{{ $libro["autor"] }}</td>
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
