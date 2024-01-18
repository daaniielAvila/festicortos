<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/estilos2.scss', 'resources/js/app.js'])

</head>
<body>
<div class="container">
    <div class="row">


                <div class="col-sm-12 mb-3 mb-sm-3">
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