@extends('plantilla.plantilla')

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

            <a name="" id="" class="btn btn-default btnCrear" href="{{route('crearmascota')}}" role="button">Crear mascota</a>
            <div class="table-responsive my-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Chip</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad Mascota (Años)</th>
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
                                <a name="" id="" class="" href="{{route('mostrarmascota',$item->Chip)}}"
                                    role="button">
                                    {{$item->Mascota}}</a>
                            </td>
                            <td>
                                {{$item->Edad_Mascota}} Años
                            </td>
                            <td>
                                {{$item->Nombre}} {{$item->Apellido}}
                            </td>
                            <td>
                                <a name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editarmascota',$item->Chip)}}" role="button"> Editar</a>

                                <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->Chip}}').submit()">
                                    Borrar
                                </a>
                            </td>
                        </tr>
                        <form class="d-none" id="delete{{$item->Chip}}"
                            action="{{route('borrarmascota',$id=$item->Chip)}}" method="post">
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