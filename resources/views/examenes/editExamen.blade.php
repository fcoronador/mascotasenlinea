@extends('plantilla.plantillaAdmin')

@section('titulo','Editar examen')

@section('contenido')

@foreach ($examen as $propiedad)


<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            <h1 class="">Editar examen: {{$propiedad->tipo}}</h1>
            <hr>
            <form action="{{route('actualizarexamen',$id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="patch">

                <div class="form-group col-8 mx-auto">
                    <label for="idExam">Número de examen</label>

                    <input type="number" name="idExam" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{$propiedad->idExam}}" readonly>
                    <br>

                    <label for="tipo">Tipo</label>
                    <input value="{{$propiedad->tipo}}" type="text" name="tipo" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>

                    <label for="resulta">Resultado</label>
                    <input value="{{$propiedad->resulta}}" type="textarea" name="resulta" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>

                    <label for="lab">Laboratorio</label>
                    <input value="{{$propiedad->lab}}" type="text" name="lab" id="" class="form-control"
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