@extends('plantilla.plantilla')

@section('titulo','Index cliente')

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
            <h1>Clientes Registrados</h1>
            <hr>

            <a name="" id="" class="btn btn-default btnCrear" href="{{route('crearcliente')}}" role="button">Crear cliente</a>
            <div class="table-responsive my-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Cédula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $item)
                        @if ($item->visible)

                        <tr> {{-- Aqui van impresiones de la variable --}}

                            <th scope="row"><a name="" id="" class="" href="{{route('mostrarcita',$item->idCedula)}}"
                                role="button">{{$item->idCedula}}</th>
                            <td><a name="" id="" class="" href="{{route('mostrarcliente',$item->idCedula)}}"
                                    role="button">
                                    {{$item->nombre}}</a></td>
                            <td>{{$item->apellido}}</td>
                            <td>
                                <a name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editarcliente',$item->idCedula)}}" role="button"> Editar</a>

                                <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->nombre}}').submit()">
                                    Borrar
                                </a>
                            </td>
                        </tr>
                        <form class="d-none" id="delete{{$item->nombre}}"
                            action="{{route('borrarcliente',$id=$item->idCedula)}}" method="post">
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