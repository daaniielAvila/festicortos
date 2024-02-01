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
  @include('partials.nav')

      {{-- @forelse($librosAutor as $libro)
      <li>
      <a href="{{ route('libros.librosyautor', $libro) }}">
      {{ $libro->titulo }} ({{ $libro->autor->nombre }})
      </a>
      </li>
      @empty
      <li>No se encontraron libros</li>
      @endforelse --}}
      <ul>
      @forelse($librosAutor as $libro)
    
    <li>
        <a href="{{ route('libros.librosyautor', $libro->id) }}">
            {{ $libro->titulo }} ({{ $libro->autor->nombre }})
        </a>
    </li>
@empty
    <li>No se encontraron libros</li>
@endforelse
  </ul>
      </html>