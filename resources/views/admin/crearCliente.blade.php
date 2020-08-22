@extends('plantilla.plantillaAdmin')

@section('titulo','Crear cliente')

@section('contenido')

<h1 class="my-3">Crear cliente</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
    <form action="{{route('guardarcliente')}}" method="post" id="form">
        @csrf
        <div class="form-group">

        <label for="idCedula">Número de identificación</label>
        <input type="text" name="idCedula" id="idCedula" class="form-control" placeholder="" aria-describedby="helpidCed">
        <h6 id="helpidCed" class="text-muted">Por favor ingrese el número de idenficación</h6>
        <br>

        <label for="nombre">Nombre</label>
        <input min="3" max="40" required
        type="text" name="nombre" id="nombre" class="form-control" aria-describedby="helpNombre" >
        <h6 id="helpNombre" class="text-muted">Por favor ingrese el nombre </h6>
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="" aria-describedby="helpApellido">
        <h6 id="helpApellido" class="text-muted">Por favor ingrese el nombre </h6>
        <br>

        <label for="telefono">Teléfono</label>
        <input type="number" name="telefono" id="telefono" class="form-control" placeholder="" aria-describedby="helpTelefono">
        <h6 id="helpTelefono" class="text-muted">Por favor ingrese el teléfono </h6>
        <br>

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="" aria-describedby="helpDir">
        <h6 id="helpDir" class="text-muted">Por favor ingrese el direccion </h6>
        <br>
        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo" class="form-control" placeholder="" aria-describedby="helpcor">
        <h6 id="helpcor" class="text-muted">Por favor ingrese el correo </h6>
        <br>
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="" aria-describedby="helpcontra">
        <h6 id="helpcontra" class="text-muted">Por favor ingrese el contrasena </h6>
            <br>
        <input class="form-control" type="submit" value="Enviar" id="Val">

            </div>
        </div>
    </div>
</div>


</form>
    



@endsection