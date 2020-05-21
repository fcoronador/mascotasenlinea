@extends('plantilla.plantilla')

@section('titulo','PanelC')

@section('contenido')

<h1>Panel Cliente</h1>
<hr>
<ul>
    <li><a href="{{route('actualizar')}}">Actualizar Perfil</a></li>
    <li><a href="{{route('MascotaL')}}">Mis mascotas</a></li>
    <li><a href="{{route('citas')}}">Citas</a></li>
        
</ul>


@endsection