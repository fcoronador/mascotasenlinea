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
                        
                        <form class="d-none" id="delete{{$item->ID}}" action="{{route('borrarcontrol',$id=$item->ID)}}"
                            method="post">
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