@extends('plantilla.plantillaAdmin')

@section('titulo','Control')

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
            @foreach ($control as $item)
            <h1>Detalles del Control: {{$item->Cliente}} {{$item->Mascota}} </h1>
            <hr>
            <div class="table-responsive my-3">
                <table class="table table-hover" id="controles">
                    <thead>
                        <tr>
                            <th colspan="2" scope="col">Datos del control</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">Cliente</th>
                            <td>{{$item->Cliente}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Mascota</th>
                            <td>{{$item->Mascota}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha</th>
                            <td>{{$item->Fecha}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Peso</th>
                            <td>
                                {{$item->Peso}}    
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">Diagnóstico</th>
                            <td>{{$item->Diagnostico}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tratamiento</th>
                            <td>{{$item->Tratamiento}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Observación</th>
                            <td>
                                {{$item->Observacion}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Veterinario</th>
                            <td>{{$item->Veterinario}} <br> {{$item->Cargo}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection