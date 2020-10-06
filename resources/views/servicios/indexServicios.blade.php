@extends('plantilla.plantilla')

@section('titulo','Servicios')

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
            <h1>Servicios</h1>
            <hr>

            <a name="" id="" class="btn btn-default btnCrear" href="{{route('crearservicio')}}" role="button">Crear Servicio</a>
            <div class="table-responsive my-3">
                <table class="table table-hover table-striped" id="servi">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Servicio</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicios as $item)
                        @if ($item->visible)

                        <tr> {{-- Aqui van impresiones de la variable --}}

                            <th scope="row"> {{$item->idServi}}</th>
                            <td>{{$item->servicios}}</td>
                            <td>
                                <a name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editarservicio',$item->idServi)}}" role="button"> Editar</a>

                                <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->servicios}}').submit()">
                                    Borrar
                                </a>
                            </td>
                        
                        <form class="d-none" id="delete{{$item->servicios}}"
                            action="{{route('borrarservicio',$id=$item->idServi)}}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                    </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





@endsection


