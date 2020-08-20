@extends('plantilla.plantillaAdmin')

@section('titulo','Crear Servicio')

@section('contenido')

<h1 class="">Crear Servicio</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
    <form action="{{route('guardarservicio')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="servicio">Servicio</label>
        <input type="text" name="servicio" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el nombre del servicio</small>
        <br>
        <input type="submit" value="Enviar">
            </div>
        </div>
    </div>
</div>

</form>

@endsection