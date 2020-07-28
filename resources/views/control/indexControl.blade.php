@extends('plantilla.plantilla')

@section('titulo','Index Controles')

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
            <h1>Controles Registradas</h1>
            <hr>

            <a name="" id="" class="btn btn-default btnCrear" href="{{route('crearcontrol')}}" role="button">Crear un
                Control</a>
            <div class="table-responsive my-3">
                <table class="table table-hover" id="controles">
                    <thead>
                        <tr>
                            <th scope="col">Cliente</th>
                            <th scope="col">Mascota</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Veterinario</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($controles as $item)
                        @if ($item->visible)

                        <tr> {{-- Aqui van impresiones de la variable --}}

                            <th scope="row">{{$item->Cliente}}</th>
                            <td>
                                <a name="" id="" class="" href="{{route('mostrarcontrol',$item->ID)}}" role="button">
                                    {{$item->Mascota}}</a>
                            </td>
                            <td>
                                {{$item->Fecha}}
                            </td>
                            <td>
                                {{$item->Peso}}
                            </td>
                            <td>
                                {{$item->Veterinario}}
                            </td>
                            <td>
                                <a name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editarcontrol',$item->ID)}}" role="button"> Editar</a>

                                <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->ID}}').submit()">
                                    Borrar
                                </a>
                            </td>
                        </tr>
                        <form class="d-none" id="delete{{$item->ID}}" action="{{route('borrarcontrol',$id=$item->ID)}}"
                            method="post">
                            @csrf
                            @method('delete')
                        </form>
                        @endif


                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


@endsection