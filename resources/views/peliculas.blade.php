

{{-- @extends('layouts.plantilla')

@section('boton1')
<a class="nav-link active" aria-current="page" href="{{route('index')}}" style="color: black">Inicio</a>
@endsection

@section('boton2')
<a class="nav-link" href="{{route('series')}}" style="color: black">Series</a>
@endsection

@section('boton4')
<a href="/agregarP">
  <input type="button" value="Agregar Peliculas"  class="btn btn-primary" style="width: 150px">
</a>
@endsection

@section('prueba')
<div class="card-container">
  @php
function getYouTubeVideoID($url) {
    preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube|youtu|youtube-nocookie)\.(?:com|be)\/(?:watch\?v=|embed\/)([A-Za-z0-9_-]+)/', $url, $matches);
    return isset($matches[1]) ? $matches[1] : null;
}
@endphp
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
 
                @php
                $trailer = isset($pelicula->trailer) ? $pelicula->trailer : (isset($pelicula['trailer']) ? $pelicula['trailer'] : null);
            @endphp

            @if($trailer)
                @php
                    $trailerID = getYouTubeVideoID($trailer);
                @endphp 
                @if($trailerID)
          
                <a href="http://www.youtube.com/embed/{{ $trailerID }}" id="link" class="btn btn-success" target="_blank" >
                  <i class="fa-solid fa-play"></i>
              </a>
       
                @else
                    <p>El trailer no esta disponible</p>
                @endif
            @else
                <p>El trailer no esta disponible</p>
            @endif
            
         

                
<!-- Mostrar mensaje de éxito si existe -->
@if(session('mensaje'))
<div class="alert alert-success">
    {{ session('mensaje') }}
</div>
@endif



                 
<form action="{{ route('eliminar1', $pelicula) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" id="btn3" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
</form>



<a href="{{ route('editarP',$pelicula['id'] ?? $pelicula->id)}}"> 
<button type="button" id="edi" class="btn btn-primary" style="margin-top: -1px"><i class="fas fa-pencil-alt"></button></i>
</a>
</div>
</div>
</div>


@endforeach
</div>

<
@endsection
  
   --}}

 @extends('layouts.plantilla')

@section('boton1')
<a class="nav-link active" aria-current="page" href="{{route('index')}}" style="color: black">Inicio</a>
@endsection

@section('boton2')
<a class="nav-link" href="{{route('series')}}" style="color: black">Series</a>
@endsection

@section('boton4')
<a href="/agregarP">
  <input type="button" value="Agregar Peliculas"  class="btn btn-primary" style="width: 150px">
</a>
@endsection
@section('prueba')
   <div class="card-container">
    @php
        function getYouTubeVideoID($url) {
            preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube|youtu|youtube-nocookie)\.(?:com|be)\/(?:watch\?v=|embed\/)([A-Za-z0-9_-]+)/', $url, $matches);
            return isset($matches[1]) ? $matches[1] : null;
        }
    @endphp

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
     
                    @php
                    $trailer = isset($pelicula->trailer) ? $pelicula->trailer : (isset($pelicula['trailer']) ? $pelicula['trailer'] : null);
                    @endphp

                    @if($trailer)
                        @php
                            $trailerID = getYouTubeVideoID($trailer);
                        @endphp 
                        @if($trailerID)
                            <a href="http://www.youtube.com/embed/{{ $trailerID }}" id="link" class="btn btn-success" target="_blank">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        @else
                            <p>El trailer no está disponible</p>
                        @endif
                    @else
                        <p>El trailer no está disponible</p>
                    @endif

                    <!-- Mostrar mensaje de éxito si existe -->
                    @if(session('mensaje'))
                    <div class="alert alert-success">
                        {{ session('mensaje') }}
                    </div>
                    @endif

                    <form action="{{ route('eliminar1', $pelicula) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" id="btn3" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                    </form>

                    <a href="{{ route('editarP',$pelicula['id'] ?? $pelicula->id)}}"> 
                        <button type="button" id="edi" class="btn btn-primary" style="margin-top: -1px"><i class="fas fa-pencil-alt"></button></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach


@endsection