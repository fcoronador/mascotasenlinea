@extends('plantilla.plantillaAdmin')

@section('titulo','Crear procedimiento')

@section('contenido')

<h1 class="">Crear Procedimientos</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
    <form action="{{route('guardarprocedimiento')}}" method="post">
        @csrf
        <div class="form-group">

        <label for="procedimiento">Procedimiento</label>
            <select class="form-control" name="idProc" id="">
                @foreach ($procedimiento as $item)
                    @if ($item->visible)
                        <option value="{{$item->idProc}}">{{$item->procedimiento}}</option>
                    @endif
                @endforeach
             </select>

        <small id="helpId" class="text-muted">Por favor seleccione el procedimiento </small>
        <br>


        <label for="fecha">Fecha del procedimiento</label>
        <input type="date" name="fecha" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese la fecha del procedimiento </small>
        <br>
        <label for="sigDosis">Siguiente Dosis</label>
        <input type="date" name="sigDosis" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese la fecha de la siguiente dosis </small>
        <br>
        
        <input type="submit" value="Enviar">

            </div>
        </div>
    </div>
</div>

</form>
   
@endsection