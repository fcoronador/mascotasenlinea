@extends('plantilla.plantilla')

@section('titulo','Panel de Control')

@section('contenido')


@if (session('rol')===3 )

<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <span class="nav-item nav-link active">Bienvenido {{session('nombre')}}&nbsp;{{session('apellido')}}</span>
        <a class="nav-item nav-link " href="#">Actulizar Datos<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Perfil</a>
        <a class="nav-item nav-link" href="#">Crear cita</a>
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
    <tr>
        <td>
            {{$item->numChip}}
        </td>
        <td>
            {{$item->nombre}}
        </td>
        <td>
            <i class="fa fa-heartbeat" aria-hidden="true"></i>
            <i class="fa fa-pencil-square" aria-hidden="true"></i>
            <i class="fa fa-trash" aria-hidden="true"></i>
        </td>
    </tr>
    @endforeach
</table>







@else

<div class="container my-5">
    <h1> <i class="fa fa-window-close-o" aria-hidden="true"></i> Lo siento no tienes permiso para acceder a este
        contenido</h1>
</div>

@endif


@endsection