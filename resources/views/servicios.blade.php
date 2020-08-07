@extends('plantilla.plantilla')

@section('titulo','Servicios')

@section('contenido')

<h1>Servicios</h1>
<hr>



@foreach ($servicios as $item)
    

<a name="" id="" class="btn btn-primary" href="#" role="button"> {{$item->servicios}}</a>



@endforeach

@endsection


