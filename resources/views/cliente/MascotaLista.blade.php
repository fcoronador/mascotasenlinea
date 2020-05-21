@extends('plantilla.plantilla')

@section('titulo','Tus Mascotas')

@section('contenido')

<h1>Lista de mascotas</h1>
<hr>
<ul>
    <li><a href="{{route('crearmascota')}}">Crear Mascota</a></li>
    <li><a href="{{route('MascotaD')}}">el nombre de mi mascota</a></li>
    
</ul>



@endsection