@extends('plantilla.plantilla')

@section('titulo','Index cliente')

@section('contenido')

@if(session('estado'))
    <div class="container">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{session('estado')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif

<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
        @foreach ($clientes as $item)
        <a name="" id="" class="btn btn-primary" href="{{route('mostrarcliente',$item->nombre)}}" role="button"> {{$item->nombre}}</a>
       
        @endforeach
    <a name="" id="" class="btn btn-warning" href="{{route('crearcliente')}}" role="button">Crear cliente</a>
        </div>
    </div>
</div>


@endsection