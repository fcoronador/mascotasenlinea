@extends('plantilla.plantillaAdmin')

@section('titulo','Crear desparacitacion')

@section('contenido')

<span class="invalid-feeback text-danger" role="alert">
    {!! $errors->first('nombre','<small>:message</small><br>')!!}    
</span>

<h1 class="">Crear desparasitación</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
    <form action="{{route('guardardesparacitacion')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el nombre del medicamento</small>
        <br>
        <input type="submit" class="btn btnCrear btn-default" value="Enviar">
            </div>
        </div>
    </div>
</div>

</form>

@endsection