@extends('plantilla.plantilla')

@section('titulo','Editar desparacitacion')

@section('contenido')

@foreach ($desparacitacion as $propiedad)

<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            <h1 class="">Editar desparacitacion: {{$propiedad->nombre}}</h1>
            <hr>
            <form action="{{route('actualizardesparacitacion',$id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="patch">

                <div class="form-group col-8 mx-auto">
                    <label for="idDespara">Número de desparacitacion</label>

                    <input type="number" name="idDespara" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{$propiedad->idDespara}}" readonly>
                    <br>

                    <label for="nombre">Nombre</label>
                    <input value="{{$propiedad->nombre}}" type="text" name="tipo" id="" class="form-control"
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