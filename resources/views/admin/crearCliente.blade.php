@extends('plantilla.plantilla')

@section('titulo','Crear cliente')

@section('contenido')

<h1 class="my-3">Crear cliente</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
    <form action="{{route('guardarcliente')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="idCedula">Número de identificación</label>
        <input type="number" name="idCedula" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el número de idenficación</small>
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el nombre </small>
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el apellido </small>
        <br>
        <label for="telefono">Teléfono</label>
        <input type="number" name="telefono" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el teléfono </small>
        <br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el direccion </small>
        <br>
        <label for="correo">Correo</label>
        <input type="text" name="correo" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el correo </small>
        <br>
        <label for="contrasena">Contraseña</label>
        <input type="text" name="contrasena" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el contrasena </small>

        <input type="submit" value="Enviar">

            </div>
        </div>
    </div>
</div>


</form>
    



@endsection