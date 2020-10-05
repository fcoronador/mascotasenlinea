@extends('plantilla.plantilla')

@section('titulo','Cliente')

@section('contenido')

@if(session('estado'))
<div class="container">
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{session('estado')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif



@foreach ($cliente as $item)

@if (session('rol')===1 || session('rol') == 2 )

<div class="container">

            <h1 class="my-3">Detalles del cliente: {{$item->nombre}} {{$item->apellido}} </h1>

@endif
@if (session('rol')===3 )



<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3" id="panel">
            <div class="d-flex" id="wrapper">
                    
    <div class="bg-light border-right hist" id="sidebar-wrapper">
        <div class="sidebar-heading">Menú</div>
        <div class="list-group list-group-flush ">
           

 <div class="vertical-menu">
    <a class="navuser nav-item nav-link activo" href="{{route('usuario')}}">Mis Mascotas</a>
        <a class="navuser nav-item nav-link " href="{{route('actualizarUser',session('idCedula'))}}">Actualizar Datos<span
                class="sr-only">(current)</span></a>
        <a class="navuser1  nav-item nav-link" href="{{route('perfilUser',session('idCedula'))}}">Perfil</a>
        <a class="navuser nav-item nav-link" href="{{route('mostrarcita',session('idCedula'))}}">Citas</a>
        <a class="navuser nav-item nav-link" href="{{route('mascotaUser',session('idCedula'))}}">Crear mascota</a>
    </div>
</div>
</div>



    <div id="page-content-wrapper">  
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    
        <button class="btn btn-primary" id="menu-toggle">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <h5 class="navbar-brand mx-auto cardtitle">Detalles del cliente: {{$item->nombre}} {{$item->apellido}}</h5>
        </nav>






@endif

<div class="col-12 col-sm-10 col-lg-10 mx-auto">
<div class="row">
            <div class="container p-3">
            

            <div class=" card card-body">

            <div class="table-responsive my-3">
                <table class="table table-hover" id='misMascotas'>
                    <thead>
                        <tr>
                            <th colspan="2" scope="col">Datos personales</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">Cédula</th>
                            <td>{{$item->idCedula}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td>{{$item->nombre}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Apellido</th>
                            <td>{{$item->apellido}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Teléfono</th>
                            <td>{{$item->telefono}}</td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">Dirección</th>
                            <td>{{$item->direccion}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Correo</th>
                            <td>{{$item->correo}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection