@extends('plantilla.plantilla')

@section('titulo','Procedimiento')

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
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            @foreach ($procedimiento as $item)
            <h1>Detalles del procedimiento: {{$item->fecha}} {{$item->sigDosis}} </h1>
            <hr>
            <div class="table-responsive my-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="2" scope="col">Datos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Nombre Procedimiento</th>
                            <td>{{$item->fecha}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre Procedimiento</th>
                            <td>{{$item->fecha}}</td>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection