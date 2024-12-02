@extends('layouts.plantilla')



@yield('prueba')
@section('form')
@section('boton4')
<a href="/series">
  <button class="btn btn-primary" style="width: 100px">Cancelar</button>
   </a>
   @endsection

@include('partials.mensaje')



<div id="cont_formserie"> 
<div class="container">
   
    <form class="form1" action="/guardarS" method="post" enctype="multipart/form-data">
      @csrf

      <p class="title1">Formulario de agregacion: Series</p>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>

    @endif  
  
   
    <h6 style="margin-top: -40px">Portada de la Serie</h6>
    <br>
 
    <input type="file" name="imagen" class="input" placeholder="Ingresa la portada de la serie" required>
    <br>

    
    <input placeholder="Escribe el nombre de la serie" class="username input" type="text" name="nombre" value="{{ old('nombre') }}" required>
    <br>

    <textarea name="sinopsis" class="input" cols="30" rows="10" placeholder="Escribe la sinopsis de la serie" required value={{ old('sinopsis') }}></textarea>
    <br>

    <input type="number" name="episodios" class="input" placeholder="Escribe el numero de episodios" required value={{old('episodios')}}>
    <br>

    <input placeholder="Escribe la duración de la serie" class="input" type="text" name="duracion" value="{{ old('duracion') }}" required>
    <br>

    <select name="categoria" class="input" required>
      <option value="" disabled selected>Elige una categoría</option>
      <option value="Terror" {{ old('categoria') == 'Terror' ? 'selected' : '' }}>Terror</option>
      <option value="Suspenso" {{ old('categoria') == 'Suspenso' ? 'selected' : '' }}>Suspenso</option>
      <option value="Accion" {{ old('categoria') == 'Accion' ? 'selected' : '' }}>Acción</option>
      <option value="Ciencia Ficcion" {{ old('categoria') == 'Ciencia Ficcion' ? 'selected' : '' }}>Ciencia Ficción</option>
      <option value="Romance" {{ old('categoria') == 'Romance' ? 'selected' : '' }}>Romance</option>
      <option value="Infantil" {{ old('categoria') == 'Infantil' ? 'selected' : '' }}>Infantil</option>
      <option value="Thriller" {{ old('categoria') == 'Thriller' ? 'selected' : '' }}>Thriller</option>
      <option value="Drama" {{ old('categoria') == 'Drama' ? 'selected' : '' }}>Drama</option>
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