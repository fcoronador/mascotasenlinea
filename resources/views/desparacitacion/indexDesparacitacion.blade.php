@extends('plantilla.plantillaAdmin')

@section('titulo','Index desparacitacion')

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
            <h1>Desparacitaciones</h1>
            <hr>

            <a name="" id="" class="btn btn-success" href="{{route('creardesparacitacion')}}" role="button">Crear desparacitacion</a>
            <div class="table-responsive my-3">
                <table class="table table-hover" id="despara">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($desparas as $item)
                        @if ($item->visible)

                        <tr> {{-- Aqui van impresiones de la variable --}}

                            <th scope="row">{{$item->idDespara}}</th>
                            <td><a name="" id="" class="" href="{{route('mostrardesparacitacion',$item->idDespara)}}" role="button">
                                {{$item->nombre}}</a></td>
                            <td>
                                <a name="" id="" class="btn btn-primary btn-sm"
                                    href="{{route('editardesparacitacion',$item->idDespara)}}" role="button"> Editar</a>

                                <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                    onclick="document.getElementById('delete{{$item->nombre}}').submit()">
                                    Borrar
                                </a>
                            </td>
                       
                        <form class="d-none" id="delete{{$item->nombre}}"
                            action="{{route('borrardesparacitacion',$id=$item->idDespara)}}" method="post">
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