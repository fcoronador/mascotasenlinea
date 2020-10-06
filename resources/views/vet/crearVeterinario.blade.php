@extends('plantilla.plantillaAdmin')

@section('titulo','Crear Veterinario')

@section('contenido')

<span class="invalid-feeback text-danger" role="alert">
    {!! $errors->first('descripcion','<small>:message</small><br>')!!}    
</span>

<h1 class="">Crear Veterinario</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
    <form action="{{route('guardarveterinario')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="nombre">Veterinario</label>
        <input min="3" max="40" type="text" name="nombre" id="nombre" class="form-control" placeholder="" aria-describedby="helpNombre" required>
        <h6 id="helpNombre" class="text-muted">Por favor ingrese el nombre del veterinario</h6>
        <br>
        <input type="submit" class="btn btnCrear btn-default " value="Enviar">
            </div>
        </div>
    </div>
</div>

</form>

@endsection