
@extends('layouts.plantilla')
@section('boton1')
<a class="nav-link active" aria-current="page" href="{{route('index')}}" style="color: black">Inicio</a>
@endsection
@section('boton2')
<a class="nav-link" href="{{route('peliculas')}}" style="color: black">Peliculas</a>
@endsection
@section('boton4')
<a href="/agregarS">
<input type="button" value="Agregar Series" class="btn btn-primary" style="width: 150px">
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
                   <!-- Botón para eliminar la serie (solo para series predefinidas) -->
               
             
                   <p class="title">{{ $serie['nombre'] ?? $serie->nombre }}</p>
                   <h6>Sinopsis:</h6>
                   <p>{{ $serie['sinopsis'] ?? $serie->sinopsis }}</p>
                   <h6>Episodios:</h6>
                   <p>{{ $serie['episodios'] ?? $serie->episodios }}</p>
                   <h6>Duración:</h6>
                   <p>{{ $serie['duracion'] ?? $serie->duracion }}</p>
                   <h6>Categoría:</h6>
                   <p>{{ $serie['categoria'] ?? $serie->categoria }}</p>
                   <h6>Personaje:</h6>
                   <p>{{ $serie['personaje'] ?? $serie->personaje }}</p>
             
                   
                @php
                $trailer = isset($serie->trailer) ? $serie->trailer : (isset($serie['trailer']) ? $serie['trailer'] : null);
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
                    <p>No trailer available</p>
                @endif
            @else
                <p>No trailer available</p>
            @endif
            
                
   <!-- Mostrar mensaje de éxito si existe -->
   @if(session('mensaje2'))
   <div class="alert alert-success">
       {{ session('mensaje2') }}
   </div>
   @endif

                 
                      <form action="{{ route('eliminar', $serie) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit"  id="btn3" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                      </form>
                  
      

<a href="{{ route('editarS',$serie['id'] ?? $serie->id)}}"> 
                  <button type="button" id="edi"class="btn btn-primary"><i class="fas fa-pencil-alt"></button></i>
               </a>
               </div>
           </div>
       </div>
   
   
@endforeach
</div>
 @endsection








   
