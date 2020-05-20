@extends('plantilla.plantilla')

@section('titulo','Inicio')

@section('contenido')

<h1 class="">Panel Cliente</h1>
<hr>

<ul>
<li><a href="{{route('actualizar')}}">Actualizar Perfil</a></li>
<li><a href="{{route('crearmascota')}}">Crear Mascota</a></li>
</ul>

@endsection

