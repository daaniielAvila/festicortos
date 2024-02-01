<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  @include('partials.nav');

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