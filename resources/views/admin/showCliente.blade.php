@extends('plantilla.plantillaAdmin')

@section('titulo','Cliente')

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
            @foreach ($cliente as $item)
            <h1>Detalles del cliente: {{$item->nombre}} {{$item->apellido}} </h1>
            <hr>
            <div class="table-responsive my-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="2" scope="col">Datos personales</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">Cédula</th>
                            <td>{{$item->idCedula}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td>{{$item->nombre}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Apellido</th>
                            <td>{{$item->apellido}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Teléfono</th>
                            <td>{{$item->telefono}}</td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">Dirección</th>
                            <td>{{$item->direccion}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Correo</th>
                            <td>{{$item->correo}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection