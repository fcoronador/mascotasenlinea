@extends('plantilla.plantillaAdmin')

@section('titulo','Crear Servicio')

@section('contenido')

<span class="invalid-feeback text-danger" role="alert">
    {!! $errors->first('descripcion','<small>:message</small><br>')!!}    
</span>


<h1 class="">Crear Servicio</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
    <form action="{{route('guardarservicio')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="servicio">Servicio</label>
        <input min="3" max="40" required type="text" name="servicio" id="nombre" class="form-control" placeholder="" aria-describedby="helpNombre">
        <h6 id="helpNombre" class="text-muted">Por favor ingrese el nombre del servicio</h6>
        <br>
        <input type="submit" class="btn btnCrear btn-default" value="Enviar">
            </div>
        </div>
    </div>
</div>

</form>

@endsection