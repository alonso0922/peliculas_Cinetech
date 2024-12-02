
      <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('imagenes/icono.ico') }}" type="image/png">

    <title>CINETECH</title>
</head>
<body>
 

  <div class="alert alert-secondary" role="alert" id="main">
    <img src="imagenes/titulo.png" alt="" style="width: 280px; height:60px;">
  
        <img src="/imagenes/logoc.PNG" class="rounded float-end" alt="..."  width="240" height="120" style="margin-top:-10px ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  @yield('boton1')
                </li>
                <li class="nav-item">
                  @yield('boton2')
                 
                </li>
               <li class="nav-item">
                  @yield('boton3')</li>
                <form action="{{route('buscarS')}}" method="get" class="input-group mb-3">
                  <input type="text" name="buscar" class="form-control" placeholder="Buscar Peliculas y Series" value="{{request('buscar')}}">
                  <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                    <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-check"></i>
                    </button>
                  

                
                  </form> 
                 
                    @yield('boton4')
              </ul>
            </div>
          </div>
        </nav>
      </div>   
      @yield('mensajes')
     
      @yield('prueba')
      @yield('form')
      @yield('form1')
      @yield('pie')
        
      @yield('contenido')
</body>
</html>
   
</body>
</html>