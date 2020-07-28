@extends('plantilla.plantilla')

@section('titulo','Index examen')

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
            @foreach ($examen as $item)
            <h1>Detalles del examen: {{$item->tipo}} {{$item->resultado}} </h1>
            <hr>
            <div class="table-responsive my-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="2" scope="col">Datos del examen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Número de examen</th>
                            <td>{{$item->idExam}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tipo</th>
                            <td>{{$item->tipo}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Resultado</th>
                            <td>{{$item->resulta}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Laboratorio</th>
                            <td>{{$item->lab}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection