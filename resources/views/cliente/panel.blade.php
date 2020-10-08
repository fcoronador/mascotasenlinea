@extends('plantilla.plantilla')

@section('titulo','Panel de Control')

@section('contenido')


@if (session('rol')===3 )

  
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
            <a class="navuser nav-item nav-link" href="{{route('citaUsuario',session('idCedula'))}}">Citas</a>
            <a class="navuser nav-item nav-link" href="{{route('mascotaUser',session('idCedula'))}}">Crear mascota</a>
        </div>
</div>
</div>
   

<div id="page-content-wrapper">  
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

    <button class="btn btn-primary" id="menu-toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <h5 class="navbar-brand mx-auto cardtitle">¡Hola {{session('nombre')}}&nbsp;{{session('apellido')}}!</h5>
    </nav>
            <div class=" col-sm-12">
  {{--               <div class="card-body"> --}}

<h4 style="text-align: center">Mis mascotas</h4>
{{-- <p style="text-align: center">A continuación encontrará el listado de sus mascotas</p>
 --}}
    <table class="table table-hover" id='misMascotas'>
    <thead>
        <tr>
            <th scope="col">Chip</th>
            <th scope="col">Nombre</th>
            <th scope="col" style="width: 100px">Opciones</th>
        </tr>
    </thead>
    @foreach ($misMascotas as $item)
    @if ($item->visible)
    <tr>
        <td>
            {{$item->numChip}}
        </td>
        <td>
            {{$item->nombre}}
        </td>
        <td>
            <a class="btn btn-warning btn-sm" title="Historia Clínica" href="{{route('historia', $item->numChip)}}">
                <i class="fa fa-heartbeat" aria-hidden="true"></i>
            </a>
            <a class="btn btn-primary btn-sm" title="Editar" href="{{route('mascotaEditar', $item->numChip)}}">
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
            <a id="boton_eliminar" title="Eliminar" class=" btn btn-danger btn-sm " href="{{route('mascotaBorrar', $item->numChip)}}">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
        </td>
    </tr>
    @endif
    @endforeach
</table>
                
            </div>
        </div>


</div>

@else

<div class="container my-5">
    <h1> <i class="fa fa-window-close-o" aria-hidden="true"></i> Lo siento no tienes permiso para acceder a este
        contenido</h1>
</div>
</div>
</div>
@endif
</div>

@endsection