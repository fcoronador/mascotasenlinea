@extends('plantilla.plantillaAdmin')

@section('titulo','Index Mascota')

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
            <h1>Mascotas Registradas</h1>
            <hr>

            <a name="" id="" class="btn btn-default btnCrear" href="{{route('crearmascota')}}" role="button">Crear
                mascota</a>
            <div class="table-responsive my-3">
                <table class="table table-hover table-striped" id="mascotas">
                    <thead>
                        <tr>
                            <th scope="col">Chip</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad Mascota</th>
                            <th scope="col">Dueño</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mascotas as $item)
                        @if ($item->visible)

                        <tr> {{-- Aqui van impresiones de la variable --}}

                            <th scope="row">{{$item->Chip}}</th>
                            <td>
                                <a name="" id="" class="" href="{{route('mostrarmascota',$item->Chip)}}" role="button">
                                    {{$item->Mascota}}</a>
                            </td>
                            <td>
                                {{$item->edad}} 
                            </td>
                            <td>
                                {{$item->Nombre}} {{$item->Apellido}}
                            </td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="{{route('historia', $item->Chip)}}">
                                    <i class="fa fa-heartbeat" aria-hidden="true"></i>
                                </a>
                                <a name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editarmascota',$item->Chip)}}" role="button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>

                                <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->Chip}}').submit()">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                            <form class="d-none" id="delete{{$item->Chip}}"
                                action="{{route('borrarmascota',$id=$item->Chip)}}" method="post">
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