@extends('plantilla.plantilla')

@section('titulo','Mascota')

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
            @foreach ($mascota as $item)
            <h1>Detalles del mascota: {{$item->nombre}} {{$item->especie}} </h1>
            <hr>
            <div class="table-responsive my-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th colspan="2" scope="col">Datos de la mascota</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">Número de chip</th>
                            <td>{{$item->numChip}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nombre</th>
                            <td>{{$item->nombre}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Especie</th>
                            <td>{{$item->especie}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Sexo</th>
                            <td>
                                @if ($item->sexo == 2)
                                    Hembra
                                @else
                                    Macho
                                @endif    
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">Raza</th>
                            <td>{{$item->raza}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha de Nacimiento</th>
                            <td>{{$item->fecNacimi}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Fecha de Esterilización</th>
                            <td>
                                @if ($item->fecEsterili == null)
                                La mascota no se ha esterilizado.
                                @else
                                {{$item->fecEsterili}}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Dueño</th>
                            <td>{{$item->Nombre}} {{$item->Apellido}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>


@endsection