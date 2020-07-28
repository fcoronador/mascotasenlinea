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
            <h1>Examenes</h1>
            <hr>

            <a name="" id="" class="btn btn-success" href="{{route('crearexamen')}}" role="button">Crear examen</a>
            <div class="table-responsive my-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Resultado</th>
                            <th scope="col">Laboratorio</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($examenes as $item)
                        @if ($item->visible)

                        <tr> {{-- Aqui van impresiones de la variable --}}

                            <th scope="row">{{$item->idExam}}</th>
                            <td><a name="" id="" class="" href="{{route('mostrarexamen',$item->idExam)}}" role="button">
                                {{$item->tipo}}</a></td>
                            <td>{{$item->Resultado}}</td>
                            <td>
                                <a name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editarexamen',$item->idExam)}}" role="button"> Editar</a>

                                <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->tipo}}').submit()">
                                    Borrar
                                </a>
                            </td>
                        </tr>
                        <form class="d-none" id="delete{{$item->tipo}}"
                            action="{{route('borrarexamen',$id=$item->idExam)}}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection