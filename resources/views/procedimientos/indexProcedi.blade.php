@extends('plantilla.plantillaAdmin')

@section('titulo','Index procedimiento')

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
            <h1>Procedimientos Registrados</h1>
            <hr>
            
            <a name="" id="" class="btn btn-default btnCrear" href="{{route('crearprocedimiento')}}" role="button">Crear procedimiento</a>
            <div class="table-responsive my-3">
                <table class="table table-hover table-striped fuenteprocedi" id="prodce">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mascota</th>
                            <th scope="col">Especie</th>
                            <th scope="col">Tipo de Examen</th>
                            <th scope="col">Fecha Examen</th>
                            <th scope="col">Vacunas</th>
                            <th scope="col">Siguiente Vacuna</th>
                            <th scope="col">Desparacitacion</th>
                            <th scope="col">Siguiente Dosis</th>
                            <th scope="col">Veterinario</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($procedimiento as $item)
                        @if ($item->visible)
                        <tr> {{-- Aqui van impresiones de la variable --}}

                        <th scope="row">{{$item->idProc}}</th>
                            <td><a name="" id="" class="" href="{{route('mostrarprocedimiento',$item->idProc)}}" role="button">
                                {{$item->nombre}}</a></td>
                            <td>{{$item->especie}}</td>
                            <td>{{$item->Tipo_de_examen}}</td>
                            <td>{{$item->Fecha}}</td>
                            <td>{{$item->Vacuna}}</td>
                            <td>{{$item->SiguienteVacuna}}</td>
                            <td>{{$item->Desparacitante}}</td>
                            <td>{{$item->SiguienteDosis}}</td>
                            <td>{{$item->Veterinario}}</td>
                                                        
                            <td>
                                <a title="Editar" name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editarprocedimiento',$item->idProc)}}" role="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>

                                <a id="boton_eliminar" title="Eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->idProc}}').submit()">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        
                        <form class="d-none" id="delete{{$item->idProc}}"
                            action="{{route('borrarprocedimiento',$idProc=$item->idProc)}}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                        @endif
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection