@extends('layouts.plantilla')

@section('boton1')
<a class="nav-link active" aria-current="page" href="{{route('index')}}" style="color: black">Inicio</a>
@endsection
@section('boton2')
<a class="nav-link" href="{{route('peliculas')}}"style="color: black">Peliculas</a>
@endsection
@section('boton3')
<a class="nav-link" href="{{route('series')}}"style="color: black">Series</a>
@endsection
@section('mensajes')
<h3 style="text-align: center;color:white; text-shadow:4px 4px 3px black;">Aqui se mostraran las series o peliculas que usted busque en nuestro catalogo</h3>
<br><br>
@endsection

@section('pie')
<div class="alert alert-primary" role="alert" id="pie">
<h6>© [2024] [CineTech 65]. Todos los derechos reservados.
    Este contenido, incluyendo texto, imágenes, código y otros elementos, está protegido por las leyes de derechos.</h6>
    <br>
    <a class="btn btn-primary" href="{{route('creadores')}}" role="button" id="creator" style="width: 100px; margin-left:10px; top:14px;">Creadores</a>
</div>
@endsection

@section('prueba')


@if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif



@if(session('mensaje2'))
    <div class="alert alert-success">
        {{ session('mensaje2') }}
    </div>
@endif


 @if(request()->has('buscar'))
    @if($peliculas->count() > 0)
        <div class="resultados">
            @foreach($peliculas as $pelicula)
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <!-- Mostrar imagen -->
                        <img 
                            src="{{ isset($pelicula->id) ? asset('imagenes/' . $pelicula->imagen) : $pelicula['imagen'] }}" 
                            alt="{{ $pelicula['nombre'] ?? $pelicula->nombre }}" 
                            width="340px" 
                            height="480px" 
                            class="title">
                    </div>
                    <div class="flip-card-back">
                        <!-- Mostrar detalles -->
                        <p class="title">{{ $pelicula['nombre'] ?? $pelicula->nombre }}</p>
                        <h6>Sinopsis:</h6>
                        <p>{{ $pelicula['sinopsis'] ?? $pelicula->sinopsis }}</p>
                        <h6>Duración:</h6>
                        <p>{{ $pelicula['duracion'] ?? $pelicula->duracion }}</p>
                        <h6>Categoría:</h6>
                        <p>{{ $pelicula['categoria'] ?? $pelicula->categoria }}</p>
                        <h6>Personaje:</h6>
                        <p>{{ $pelicula['personaje'] ?? $pelicula->personaje }}</p>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
        <div class="pagination">
            {{ $peliculas->links() }}
        </div>
    @endif

    @if($series->count() > 0)
        <div class="resultados">
            @foreach($series as $serie)
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <!-- Mostrar imagen -->
                        <img 
                            src="{{ isset($serie->id) ? asset('imagenes/' . $serie->imagen) : $serie['imagen'] }}" 
                            alt="{{ $serie['nombre'] ?? $serie->nombre }}" 
                            width="340px" 
                            height="480px" 
                            class="title">
                    </div>
                    <div class="flip-card-back">
                        <!-- Mostrar detalles -->
                        <p class="title">{{ $serie['nombre'] ?? $serie->nombre }}</p>
                        <h6>Sinopsis:</h6>
                        <p>{{ $serie['sinopsis'] ?? $serie->sinopsis }}</p>
                        <h6>Duración:</h6>
                        <p>{{ $serie['duracion'] ?? $serie->duracion }}</p>
                        <h6>Episodios:</h6>
                        <p>{{ $serie['episodios'] ?? $serie->episodios }}</p>
                        <h6>Categoría:</h6>
                        <p>{{ $serie['categoria'] ?? $serie->categoria }}</p>
                        <h6>Personaje:</h6>
                        <p>{{ $serie['personaje'] ?? $serie->personaje }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $series->links() }}
        </div>
    @endif
@endif
@endsection