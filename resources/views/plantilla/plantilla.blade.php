<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css ">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/b-1.6.3/b-colvis-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/sp-1.1.1/datatables.min.css"/>

    {{-- Hoja de estilos de datables buena --}}
    <script src="/js/app.js"></script>{{-- No dejar JavaScript encima de este --}}

 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.21/b-1.6.3/b-colvis-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/sp-1.1.1/datatables.min.js"></script>
    


    <title>@yield('titulo')</title>
</head>

<body>
    <div class="row jumbotron jumbotron-fluid mb-0 py-0 shadow-lg rounded">
        <div class="col-sm-5 encabezado">
            <a href="{{route('inicio')}}">
                <img src="{{url('/img/hueso1.png')}}" class="img-fluid" alt="Responsive image" >
            </a>
        </div>

        <nav class="navbar navbar-expand-md sticky-top">
            <div class="navbar1 navbar-collapse collapse w-110 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active ">
                        <a class="nav-link menu" href="{{route('quienes')}}">Nosotros</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link menu" href="{{route('servicios')}}">Servicios</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link menu" href="{{route('contacto')}}">Contacto</a>
                    </li>
                    @if (session('rol')===1)
                        <li class="nav-item">
                            <a class="nav-link menu" href="{{route('administracion')}}">Administración</a>
                        </li>
                    @endif

                </ul>
            </div>

            <div class="mx-auto order-0">
                <a class="navbar-brand mx-auto " href="#"></a>
                <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse"
                    data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar2 navbar-collapse collapse w-100 order-3 dual-collapse2 ">
                <ul class="navbar-nav ml-auto">

                   @if (session('rol')==null)
                    <li class="nav-item">
                        <a class="nav-link registro"  data-toggle="modal" data-target="#registroModal">Registrarse
                            <span class="huella">
                                <img src="https://img.icons8.com/ios/40/000000/pet-commands-summon.png">
                            </span></a>
                    </li>
                    @endif

                    @if (session('rol'))
                        
                    <li class="nav-item">
                        <a class="nav-link login" href="{{route('logout')}}">Cerrar Sesión
                            <span class="huella">
                                <img src="https://img.icons8.com/ios/40/000000/dog-training.png">
                            </span>
                        </a>
                    </li>
                                            
                    @else
                        
                    <li class="nav-item">
                        <a class="nav-link login1"  data-toggle="modal" data-target="#loginModal">Iniciar Sesión
                            <span class="huella">
                                <img src="https://img.icons8.com/ios/40/000000/dog-training.png">
                            </span>
                        </a>
                    </li>
                        
                    @endif

                </ul>
            </div>
        </nav>
    </div>


    @yield('contenido')



</body>

</html>