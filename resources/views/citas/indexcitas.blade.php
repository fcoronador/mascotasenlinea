@extends('plantilla.plantillaAdmin')

@section('titulo','Mascotas en línea')

@section('contenido')

{{-- @dump($nombre) --}}



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
            <h1>Citas</h1>
            <hr>

            <a name="" id="" class="btn btn-default btnCrear" href="{{route('crearcita')}}" role="button">Crear una cita</a>
                <div class="table-responsive my-3 table-striped tablaCitas">
                    <table class="table table-hover" id="citas">
                        <thead>
                            <tr>
                                
                                <th scope="col">Fecha</th>
                                {{-- <th scope="col">ID</th> --}}
                                <th scope="col">Hora</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Motivo</th>
                                <th scope="col">Servicio</th>
                                <th scope="col">Veterinario</th>
                                <th scope="col">Opciones</th>
            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($citas as $item)
                            @if ($item->visible)
            
                            <tr class="tablaCitas2"> {{-- Aqui van impresiones de la variable --}}
                                {{-- @dump($item) --}}
                                <th scope="row">{{$item->Fecha}}</th>
                                <td>{{$item->Hora}}</td>
                                <th scope="row">{{$item->clientes}}</th>
                                <td>{{$item->Motivo}}</td>
                                <td>{{$item->Servicio}}</td>
                                <td>{{$item->Veterinario}}</td>
                                <td>
                                    <a name="" id=""  title="Editar" class="btn btn-primary btn-sm "
                                        href="{{route('editarcita',$item->idCita)}}" role="button">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
            
                                    <a id="boton_eliminar" title="Eliminar" class=" btn btn-danger btn-sm "
                                        onclick="document.getElementById('delete{{$item->idCita}}').submit()">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            
                            <form class="d-none"  id="delete{{$item->idCita}}"
                            action="{{route('borrarcita',$idCita=$item->idCita)}}" method="post">
                            @csrf
                            @method('delete')
                            </form>
                            @endif
                        </tr>
            
                            @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
</div>


@endsection