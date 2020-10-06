@extends('plantilla.plantillaAdmin')

@section('titulo','Editar procedimiento')

@section('contenido')

@foreach ($procedi as $propiedad)


<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            <h1 class="">Editar procedimiento: {{$propiedad->fecha }} {{$propiedad->sigDosis}}</h1>
            <hr>
            <form action="{{route('actualizarprocedimiento',$id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="patch">

                <div class="form-group col-8 mx-auto">
                    <label for="idProc">Número de procedimiento</label>
                    <input type="number" name="idProc" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{$propiedad->idProc}}" readonly>
                    <br>

                    <label for="fecha">Fecha del procedimiento</label>
                    <input value="{{$propiedad->fecha}}" type="date" name="fecha" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>

                    <label for="sigDosis">Siguiente Dosis</label>
                    <input value="{{$propiedad->sigDosis}}" type="date" name="sigDosis" id="" class="form-control"
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