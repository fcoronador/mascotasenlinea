@extends('plantilla.plantillaAdmin')

@section('titulo','Crear examen')

@section('contenido')

<span class="invalid-feeback text-danger" role="alert">
    {!! $errors->first('nombre','<small>:message</small><br>')!!}    
</span>

<h1 class="">Crear examen</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
    <form action="{{route('guardarexamen')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el tipo de examen a realizar</small>
        <br>
        <label for="resulta">Resultado</label>
        <input type="textarea" name="resulta" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el resultado del examen</small>
        <br>
        <label for="lab">Laboratorio</label>
        <input type="text" name="lab" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el resultado de laboratorio</small>
        <br>
        <input type="submit" value="Enviar">

            </div>
        </div>
    </div>
</div>

</form>

@endsection