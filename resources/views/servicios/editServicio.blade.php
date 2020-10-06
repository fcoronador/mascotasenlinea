@extends('plantilla.plantillaAdmin')

@section('titulo','Editar Servicio')

@section('contenido')



@foreach ($servicio as $propiedad)

<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            <h1 class="">Editar Servicio: {{$propiedad->servicios}}</h1>
            <hr>
            <form action="{{route('actualizarservicio',$id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="patch">

                <div class="form-group col-8 mx-auto">
                    <label for="idServi">Código del servicio</label>

                    <input type="number" name="idServi" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{$propiedad->idServi}}" readonly>
                    <br>

                    <label for="servicios">Nombre del servicio</label>
                    <input value="{{$propiedad->servicios}}" type="text" name="servicios" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>
                    
                    @endforeach
                    <br>
                    <input class="form-control" type="submit" value="Enviar">
                </div>
        </div>
    </div>
</div>
</form>


@endsection