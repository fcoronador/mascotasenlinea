@extends('plantilla.plantillaAdmin')

@section('titulo','Desparacitacion')

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
            @foreach ($despara as $item)
            <h1>Detalles de la desparasitación: {{$item->nombre}} </h1>
            <hr>
            <div class="table-responsive my-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="2" scope="col">Datos de la desparasitación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Número de la desparasitación</th>
                            <td>{{$item->idDespara}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td>{{$item->nombre}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection