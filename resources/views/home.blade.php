<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a class="nav-link text-white" href="{{route('libros.librosyautor', 15)}}">Lista de libros y su autor</a>


      </div>
    </div>
  </div>
</nav>
<article>
<div class="titulo">
Bienvenidos a la pagina de festicortos
<a href="{{route('listadecortos')}}">

<button type="button" class="btn btn-primary btn-lg">Visita nuestra lista de cortos</button></a>
<a class="nav-link" href="{{route('libros.index')}}">
<button type="button" class="btn btn-secondary btn-lg"  >Visita nuestra lista de libros </button></a>
</div>
</article> 
</body>
</html>