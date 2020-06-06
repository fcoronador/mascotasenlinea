@extends('plantilla.plantilla')

@section('titulo','Editar cliente')

@section('contenido')


<h1 class="">Editar cliente</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
            
                
        <form action="{{route('actualizarcliente',$id)}}" method="post">    
        @csrf
        <input type="hidden" name="_method" value="patch">

        <div class="form-group">
        <label for="idCedula">Número de identificación</label>
        
        @foreach ($cliente as $propiedad)
        <input type="number" name="idCedula" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{$propiedad->idCedula}}" readonly>
        <small id="helpId" class="text-muted">Por favor ingrese el número de idenficación</small>
        <br>

        <label for="nombre">Nombre</label>
        <input value="{{$propiedad->nombre}}" type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el nombre </small>
        <br>

        <label for="apellido">Apellido</label>
        <input value="{{$propiedad->apellido}}" type="text" name="apellido" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el apellido </small>
        <br>

        <label for="telefono">Teléfono</label>
        <input value="{{$propiedad->telefono}}" type="number" name="telefono" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el teléfono </small>
        <br>
        <label for="direccion">Dirección</label>
        <input value="{{$propiedad->direccion}}" type="text" name="direccion" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el direccion </small>
        <br>
        <label for="correo">Correo</label>
        <input value="{{$propiedad->correo}}" type="text" name="correo" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el correo </small>
        <br>
        <label for="contrasena">Contraseña</label>
        <input value="{{$propiedad->contrasena}}" type="text" name="contrasena" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el contrasena </small>
        @endforeach

        <input type="submit" value="Enviar">

            </div>
        </div>
    </div>
</div>


</form>
    



@endsection