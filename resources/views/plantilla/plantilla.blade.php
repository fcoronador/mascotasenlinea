<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <title>@yield('titulo')</title>


    
</head>
<body>
    <a href="{{route('inicio')}}">Inicio</a>
    @yield('contenido')
<div class="row jumbotron jumbotron-fluid mb-0 py-0 shadow-lg rounded">
    <div class="col-sm-5 encabezado">
        <img src="{{url('/img/hueso1.png')}}" class="img-fluid" 
        alt="Responsive image" href="{{route('inicio')}}">
        </div>

    <nav class="navbar navbar-expand-md sticky-top" >
        <div class="navbar1 navbar-collapse collapse w-110 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active ">
                    <a class="nav-link menu" href="{{route('inicio')}}" >Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" href="{{route('inicio')}}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" href="{{route('inicio')}}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu" href="{{route('inicio')}}">Blog</a>
                </li>

            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto " href="#" ></a>
            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        <div class="navbar2 navbar-collapse collapse w-100 order-3 dual-collapse2 ">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                      <a class="nav-link registro" href="#">Registrarse 
                      <span class="huella">
                       <img src="https://img.icons8.com/ios/40/000000/pet-commands-summon.png" >
                    </span></a>
                </li>
                <li class="nav-item">

                    <a class="nav-link login" href="#">Iniciar Sesión
                     <span class="huella">
                     <img src="https://img.icons8.com/ios/40/000000/dog-training.png">
                  </span></a>
                </li>
            </ul>
        </div>
    </nav>

</div>
    
    @yield('contenido')

</body>
</html>