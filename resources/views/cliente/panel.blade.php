@extends('plantilla.plantilla')

@section('titulo','Panel de Control')

@section('contenido')


@if (session('rol')===3 )

<div class="container">
    <h1 class="my-3">¡Hola {{session('nombre')}}&nbsp;{{session('apellido')}}!</h1>

    <div class="card-deck">
{{--     <div class="card col-sm-4">
 --}}           

 <div class="vertical-menu">
    <a class="navuser1 nav-item nav-link activo" href="{{route('usuario')}}">Mis Mascotas</a>
        <a class="navuser nav-item nav-link " href="{{route('actualizarUser',session('idCedula'))}}">Actualizar Datos<span
                class="sr-only">(current)</span></a>
        <a class="navuser  nav-item nav-link" href="{{route('perfilUser',session('idCedula'))}}">Perfil</a>
        <a class="navuser nav-item nav-link" href="{{route('mostrarcita',session('idCedula'))}}">Crear cita</a>
        <a class="navuser nav-item nav-link" href="{{route('mascotaUser',session('idCedula'))}}">Crear mascota</a>
    </div>
</nav>

{{-- </div>
 --}}       

        
            <div class="card col-sm-10">
                <div class="card-body">

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
@else

<div class="container my-5">
    <h1> <i class="fa fa-window-close-o" aria-hidden="true"></i> Lo siento no tienes permiso para acceder a este
        contenido</h1>
</div>
</div>
</div>
@endif


@endsection