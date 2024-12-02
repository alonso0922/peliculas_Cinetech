@extends('layouts.plantilla')




@section('form1')
@yield('prueba')
@section('boton4')
<a href="/peliculas">
  <button class="btn btn-primary" style="width: 100px">Cancelar</button>
   </a>
   @endsection
@include('partials.mensaje')



{{-- <div id="cont_formserie"> 
<div class="container">
  <form class="form" action="">
    <p class="title1">Formulario de agregacion: Peliculas</p>
    <form action="{{ route('peliculas') }}" method="post" enctype="multipart/form-data">
      @csrf
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>

    @endif  
    
    <h6 style="margin-top: -40px">Portada de la pelicula</h6>
    <br>
     <input type="file" name="img" class="input" placeholder="Ingresa la portada de la pelicula">
      <br>
            <input placeholder="Escribe el nombre de la pelicula" class="username input" type="text" />
            <br>
           <textarea name="sinopsis" class="input" cols="30" rows="10" placeholder="Escribe la sinopsis de la pelicula" ></textarea>
            <br>
           <input placeholder="Escribe la duracion de la pelicula" class="input" type="text" />
           <br>
           <select name="Categoria" class="input">
            <option value="" disabled selected>Elige una categoria</option>
              <option value="Terror" >Terror</option>
              <option value="Suspenso">Suspenso</option>
              <option value="Accion">Accion</option>
              <option value="Ciencia Ficcion">Ciencia Ficcion</option>
              <option value="Romance">Romance</option>
              <option value="Infantil">Infantil</option>
              </select>
              <br>
              <input type="text" placeholder="Escribe el nombre del personaje" name="personaje" class="input">
              <input type="submit" value="Enviar" class="boton">
  </form>
 @endsection
</div> --}}
<div id="cont_formserie"> 
  <div class="container">
    <form class="form" action="/guardarP" method="post" enctype="multipart/form-data">
      @csrf

      <p class="title1">Formulario de Agregación: Peliculas</p>

      <!-- Mostrar errores si los hay -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <h6 style="margin-top: -40px">Portada de la Película</h6>
      <br>
   
      <input type="file" name="imagen" class="input" placeholder="Ingresa la portada de la película" required>
      <br>

      
      <input placeholder="Escribe el nombre de la película" class="username input" type="text" name="nombre" value="{{ old('nombre') }}" required>
      <br>

      <textarea name="sinopsis" class="input" cols="30" rows="10" placeholder="Escribe la sinopsis de la película" required>{{ old('sinopsis') }}</textarea>
      <br>

      <input placeholder="Escribe la duración de la película" class="input" type="text" name="duracion" value="{{ old('duracion') }}" required>
      <br>

      <select name="categoria" class="input" required>
        <option value="" disabled selected>Elige una categoría</option>
        <option value="Terror" {{ old('categoria') == 'Terror' ? 'selected' : '' }}>Terror</option>
        <option value="Suspenso" {{ old('categoria') == 'Suspenso' ? 'selected' : '' }}>Suspenso</option>
        <option value="Accion" {{ old('categoria') == 'Accion' ? 'selected' : '' }}>Acción</option>
        <option value="Ciencia Ficcion" {{ old('categoria') == 'Ciencia Ficcion' ? 'selected' : '' }}>Ciencia Ficción</option>
        <option value="Romance" {{ old('categoria') == 'Romance' ? 'selected' : '' }}>Romance</option>
        <option value="Infantil" {{ old('categoria') == 'Infantil' ? 'selected' : '' }}>Infantil</option>
      </select>
      <br>

      <!-- Campo para el nombre del personaje -->
      <input type="text" placeholder="Escribe el nombre del personaje" name="personaje" class="input" value="{{ old('personaje') }}">
      <br>
      <input type="url" name="trailer" placeholder="URL del Trailer (YouTube)" class="input" value="{{ old('trailer') }}" required>
    <br>
      <!-- Botón para enviar el formulario -->
      <button type="submit" class="boton">Enviar</button>
    </form>
  </div>
</div>
@endsection