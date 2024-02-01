<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/estilos2.scss', 'resources/js/app.js'])

</head>
<body>
  @include('partials.nav');



<div class="container">
  <div class="row">
    @foreach ($cortos as $corto)
      <div class="col-sm-4 mb-3 mb-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title display-7"><strong>{{ $corto['titulo'] }}</strong></h5>
            <p class="card-text">{{ $corto['director'] }}</p>

            <p class="card-text">{{ $corto['sinapsis'] }}</p>
            <a href="{{route('cortodetallado', $corto['id'])}}" class="btn btn-primary">Detalles</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

</body>
</html>
