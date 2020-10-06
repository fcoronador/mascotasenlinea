@extends('plantilla.plantilla')

@section('titulo','Panel de Control')

@section('contenido')


@if (session('rol')===3 || session('rol')===2 || session('rol')===1)

  
<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3" id="panel">
            <div class="d-flex" id="wrapper">


    <div class="bg-light border-right hist" id="sidebar-wrapper">
        <div class="sidebar-heading">Menú</div>
        <div class="list-group list-group-flush ">
    <div class="vertical-menu ">
        <a class="navuser1 nav-item nav-link" href="{{route('usuario')}}">Mis Mascotas</a>
            <a class="navuser nav-item nav-link " href="{{route('actualizarUser',session('idCedula'))}}">Actualizar Datos
                <span class="sr-only">(current)</span></a>
            <a class="navuser  nav-item nav-link" href="{{route('perfilUser',session('idCedula'))}}">Perfil</a>
            <a class="navuser nav-item nav-link" href="{{route('mostrarcita',session('idCedula'))}}">Citas</a>
            <a class="navuser nav-item nav-link" href="{{route('mascotaUser',session('idCedula'))}}">Crear mascota</a>
        </div>
</div>
</div>



    <div id="page-content-wrapper"> 

    @include('historia.menusup')
    @include('historia.tablas')
    
    </div>
</div>  
 
</div>  
</div>  
@else

<div class="container my-5">
    <h1> <i class="fa fa-window-close-o" aria-hidden="true"></i> Lo siento no tienes permiso para acceder a este
        contenido</h1>
</div>
</div>

@endif

@endsection