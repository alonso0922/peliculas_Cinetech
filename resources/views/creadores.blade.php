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
@section('prueba')

<h2 style="text-align: center;color:white; font-size:40px; text-shadow:4px 4px 3px black;">CREADORES</h2>
<br><br>
<div  class="container" id="cont" style="margin-left: 200px">
  <div class="row row-4">
      <div class="card">
        <div class="first-content">
          <span>Alfaro Luna Angel Javier</span>
        </div>
        <div class="second-content">
      <span><img src="/imagenes/angel.gif" alt="angel" width="170px" id="angel"></span>
        </div>
      
      <style>
        span{
          color: black;
          
        }
      </style>
      </div>


      <div class="card1">
        <div class="first-content1">
          <span>Rocha Banda Aldo Angel</span>
        </div>
        <div class="second-content1">
      <span><img src="/imagenes/aldo.gif" alt="aldo" width="140px" id="aldo"></span>
        </div>
      
      
      </div>


      <div class="card2">
        <div class="first-content2">
          <span>Olivares Prieto Edgar Alonso</span>
        </div>
        <div class="second-content2">
      <span><img src="/imagenes/edgar.gif" alt="edgar" width="140px" id="edgar"></span>
        </div>
      
      
      </div>


      <div class="card3">
        <div class="first-content3">
          <span>Carreon Martinez Benjamin</span>
        </div>
        <div class="second-content3">
      <span><img src="/imagenes/yarbis.gif" alt="benjamin" width="140px" id="yarbis"></span>
        </div>
      </div>
 

  
      <div class="card4">
        <div class="first-content4">
          <span>Ortiz Gonzalez Jared Mauricio</span>
        </div>
        <div class="second-content4">
      <span><img src="/imagenes/mauricio.gif" alt="mauricio" width="153px" id="mauricio"></span>
        </div>
      </div>

    </div>
    </div>
    <br>
    <br>
    <br>
    @endsection
    @section('pie')
    <div class="accordion accordion-flush" id="accordionFlushExample" style="margin: 50px">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
         Objetivo
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Este proyecto nos permitió profundizar en el manejo de Laravel, mejorando nuestras habilidades para desarrollar aplicaciones web robustas y escalables, al mismo tiempo que adquirimos un conocimiento más profundo sobre sus herramientas y funcionalidades</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Metas
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Nuestra meta fue llevar este proyecto a su máximo potencial, asegurándonos de implementarlo de la manera más eficiente y optimizada posible, manteniendo la calidad y la atención al detalle en cada paso del desarrollo.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Mensaje de agradecimiento
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Queremos agradecerte sinceramente por tomarte el tiempo de visitar nuestra página. Tu interés y apoyo son fundamentales para seguir creciendo y mejorando en cada proyecto que emprendemos. ¡Gracias por acompañarnos!</div>
        </div>
      </div>
    </div>
    @endsection