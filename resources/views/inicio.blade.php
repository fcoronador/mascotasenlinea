@extends('plantilla.plantilla')

@section('titulo','Inicio')

@section('contenido')

<h1 class="">Inicio del proyecto</h1>
<hr>

<h2>
    <a href="{{route('contacto')}}">Contacto</a>
</h2>
<div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
</div>

<i class="fa fa-ambulance" aria-hidden="true">jh</i>

<i class="fa fa-arrow-left" aria-hidden="true">jhj</i>
 
<div class="dropdown open">
    <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
                Dropdown
            </button>
    <div class="dropdown-menu" aria-labelledby="triggerId">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item disabled" href="#">Disabled action</a>
    </div>
</div>


@endsection