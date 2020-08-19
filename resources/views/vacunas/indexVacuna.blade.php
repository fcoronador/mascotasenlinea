@extends('plantilla.plantillaAdmin')

@section('titulo','Index vacuna')

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
            <h1>Vacunas</h1>
            <hr>

            <a name="" id="" class="btn btn-success" href="{{route('crearvacuna')}}" role="button">Crear vacuna</a>
            <div class="table-responsive my-3">
                <table class="table table-hover" id="vacun">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vacunas as $item)
                        @if ($item->visible)

                        <tr> {{-- Aqui van impresiones de la variable --}}

                            <th scope="row">{{$item->idVacun}}</th>
                            <td><a name="" id="" class="" href="{{route('mostrarvacuna',$item->idVacun)}}" role="button">
                                {{$item->nombre}}</a></td>
                            <td>
                                <a name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editarvacuna',$item->idVacun)}}" role="button"> Editar</a>

                                <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->nombre}}').submit()">
                                    Borrar
                                </a>
                            </td>
                       
                        <form class="d-none" id="delete{{$item->nombre}}"
                            action="{{route('borrarvacuna',$id=$item->idVacun)}}" method="post">
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