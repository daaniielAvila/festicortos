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
          <a class="nav-link text-white" href="{{route('libros.librosyautor',0)}}">Lista de libros y su autor</a>
          <a class="nav-link text-white" href="{{ route('libros.librospor',0)}}">Lista de libros por autor</a>
          <a class="nav-link text-white" href="{{ route('apilibros.index')}}">Lista de libros JSON</a>





        </div>
      </div>
    </div>
  </nav>