@extends('plantilla.plantilla')

@section('titulo','Panel de Control')

@section('contenido')


@if (session('rol')===3 )

<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <span class="nav-item nav-link active">Bienvenido {{session('nombre')}}&nbsp;{{session('apellido')}}</span>
        <a class="nav-item nav-link " href="{{route('actualizarUser',session('idCedula'))}}">Actualizar Datos<span
                class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="{{route('perfilUser',session('idCedula'))}}">Perfil</a>
        <a class="nav-item nav-link" href="{{route('mostrarcita',session('idCedula'))}}">Crear cita</a>
        <a class="nav-item nav-link" href="{{route('mascotaUser',session('idCedula'))}}">Crear mascota</a>
    </div>
</nav>
<h2>Mis mascotas</h2>

<table class="table table-hover" id='misMascotas'>
    <thead>
        <tr>
            <th scope="col">Chip</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
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
            <a href="{{route('historia', $item->numChip)}}">
                <i class="fa fa-heartbeat" aria-hidden="true"></i>
            </a>
            <a href="{{route('mascotaEditar', $item->numChip)}}">
                <i class="fa fa-pencil-square" aria-hidden="true"></i>
            </a>
            <a href="{{route('mascotaBorrar', $item->numChip)}}">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
        </td>
    </tr>
    @endif
    @endforeach
</table>

@else

<div class="container my-5">
    <h1> <i class="fa fa-window-close-o" aria-hidden="true"></i> Lo siento no tienes permiso para acceder a este
        contenido</h1>
</div>

@endif


@endsection