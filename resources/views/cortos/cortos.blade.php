<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/estilos2.scss', 'resources/js/app.js'])

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
      </div>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">


    <div class="col-sm-4 mb-3 mb-sm-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title display-7"><strong>{{ $corto['titulo'] }}</strong></h5>
            <p class="card-text">{{ $corto['director'] }}</p>
            <p class="card-text">{{ $corto['sinapsis'] }}</p>
            <a href="{{ route('listadecortos') }}" class="">Volver</a>
        </div>
    </div>
</div>


    </div>
</div>
    
</body>
</html>