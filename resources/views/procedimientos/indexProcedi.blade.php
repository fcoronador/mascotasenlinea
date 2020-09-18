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
                <table class="table table-hover table-striped" id="prodce">
                    <thead>
                        <tr>
                            <th scope="col">Numero de procedimiento</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Siguiente Dosis</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($procedimiento as $item)
                        <tr> {{-- Aqui van impresiones de la variable --}}

                            <th scope="row">{{$item->idProc}}</th>
                            <td><a name="" id="" class="" href="{{route('mostrarprocedimiento',$item->idProc)}}"
                                    role="button">
                                    {{$item->fecha}}</a></td>
                            <td>{{$item->sigDosis}}</td>
                            <td>
                                <a name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editarprocedimiento',$item->idProc)}}" role="button"> Editar</a>

                                <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->idProc}}').submit()">
                                    Borrar
                                </a>
                            </td>
                        
                        <form class="d-none" id="delete{{$item->idProc}}"
                            action="{{route('borrarprocedimiento',$id=$item->idProc)}}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection