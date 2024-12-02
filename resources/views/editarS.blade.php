
@extends('layouts.plantilla')
<html>
    <link rel="stylesheet" href="/css/estilos2.css">
</html>
@include('partials.mensaje')
@section('prueba')
@section('boton4')
<a href="/series">
  <button class="btn btn-primary" style="width: 100px">Cancelar</button>
   </a>
   @endsection
<div id="cont_formserie"> 
   <div class="container">
<form class="form" action="{{ route('actualizarS',$serie->id) }}" method="POST" enctype="multipart/form-data">
 
    @csrf
    @method('PUT')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <p class="title1">Formulario para editar:Series</p>

    <h6>Portada de la Serie</h6>
    <br>
    <input type="file" name="imagen" class="input">
    <br>

    <input placeholder="Escribe el nombre de la serie" class="username input" type="text" name="nombre" value="{{ old('nombre', $serie->nombre) }}" required>
    <br>

    <textarea name="sinopsis" class="input" cols="30" rows="10" placeholder="Escribe la sinopsis de la serie"  value="{{ old('sinopsis',$serie->sinopsis) }}" required></textarea>
    <br>

    <input type="number" name="episodios" class="input" placeholder="Escribe el número de episodios" value="{{ old('episodios',$serie->episodios)}}" required>
    <br>

    <input placeholder="Escribe la duración de la serie" class="input" type="text" name="duracion" value="{{ old('duracion',$serie->duracion)}}" required>
    <br>

    <select name="categoria" class="input" required>
        <option value="" disabled selected>Elige una categoría</option>
        <option value="Terror" {{ old('categoria', $serie->categoria ?? '') == 'Terror' ? 'selected' : '' }}>Terror</option>
        <option value="Suspenso" {{ old('categoria', $serie->categoria ?? '') == 'Suspenso' ? 'selected' : '' }}>Suspenso</option>
        <option value="Accion" {{ old('categoria', $serie->categoria ?? '') == 'Accion' ? 'selected' : '' }}>Acción</option>
        <option value="Ciencia Ficcion" {{ old('categoria', $serie->categoria ?? '') == 'Ciencia Ficcion' ? 'selected' : '' }}>Ciencia Ficción</option>
        <option value="Romance" {{ old('categoria', $serie->categoria ?? '') == 'Romance' ? 'selected' : '' }}>Romance</option>
        <option value="Infantil" {{ old('categoria', $serie->categoria ?? '') == 'Infantil' ? 'selected' : '' }}>Infantil</option>
        <option value="Thriller" {{ old('categoria', $serie->categoria ?? '') == 'Thriller' ? 'selected' : '' }}>Thriller</option>
        <option value="Drama" {{ old('categoria', $serie->categoria ?? '') == 'Drama' ? 'selected' : '' }}>Drama</option>
    </select>
    <br>

    <input type="text" placeholder="Escribe el nombre del personaje" name="personaje" class="input" value="{{ old('personaje',$serie->personaje) }}">
    <br>

    <button type="submit" class="boton">Guardar</button>
</form>
</div>
</div>
@endsection
