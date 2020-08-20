@extends('plantilla.plantilla')

@section('titulo','Veterinarios')

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
            <h1>Veterinarios</h1>
            <hr>

            <a name="" id="" class="btn btn-default btnCrear" href="{{route('crearveterinario')}}" role="button">Crear Veterinario</a>
            <div class="table-responsive my-3">
                <table class="table table-hover" id="veter">
                    <thead>
                        <tr>
                            <th scope="col">Cargo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($veterinario as $item)
                        @if ($item->visible)

                        <tr> {{-- Aqui van impresiones de la variable --}}

                            <th scope="row"> {{$item->idVeterin}}</th>
                            <td>{{$item->nombre}}</td>
                            <td>
                                <a name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editarveterinario',$item->idVeterin)}}" role="button"> Editar</a>

                                <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->nombre}}').submit()">
                                    Borrar
                                </a>
                            </td>
                        
                        <form class="d-none" id="delete{{$item->nombre}}"
                            action="{{route('borrarveterinario',$id=$item->idVeterin)}}" method="post">
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


