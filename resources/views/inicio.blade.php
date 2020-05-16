@extends('plantilla.plantilla')

@section('titulo','Inicio')

@section('contenido')

<h1>Inicio del proyecto</h1>
<hr>
<ul>
    <li><a href="{{route('registro')}}">enlace a Registro</a></li>
    <li><a href="{{route('quienes')}}">enlace a  Quienes Somos</a></li>
    <li><a href="{{route('login')}}">enlace a  Iniciar Sesion</a></li>
</ul>


@endsection