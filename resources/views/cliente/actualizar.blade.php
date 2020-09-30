@extends('plantilla.plantilla')

@section('titulo','Editar cliente')

@section('contenido')

@foreach ($cliente as $propiedad)

<div class="container">
    <h1 class="my-3">Editar cliente: {{$propiedad->nombre }} {{$propiedad->apellido}}</h1>

@if (session('rol')===3 )

    <div class="card-deck">
           

 <div class="vertical-menu">
    <a class="navuser nav-item nav-link activo" href="{{route('usuario')}}">Mis Mascotas</a>
        <a class="navuser1 nav-item nav-link " href="{{route('actualizarUser',session('idCedula'))}}">Actualizar Datos<span
                class="sr-only">(current)</span></a>
        <a class="navuser  nav-item nav-link" href="{{route('perfilUser',session('idCedula'))}}">Perfil</a>
        <a class="navuser nav-item nav-link" href="{{route('mostrarcita',session('idCedula'))}}">Citas</a>
        <a class="navuser nav-item nav-link" href="{{route('mascotaUser',session('idCedula'))}}">Crear mascota</a>
    </div>




@endif


<div class="card col-sm-10">
    <div class="card-body">

<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            
            <form action="{{route('actualizarcliente',$id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="patch">

                <div class="form-group col-8 mx-auto">
                    <label for="idCedula">Número de identificación</label>


                    <input type="number" name="idCedula" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{$propiedad->idCedula}}" readonly>
                    <br>

                    <label for="nombre">Nombre</label>
                    <input min="3" max="40" value="{{$propiedad->nombre}}" required type="text" name="nombre"
                        id="nombre" class="form-control" aria-describedby="helpNombre">
                    <h6 id="helpNombre" class="text-muted">Por favor ingrese el nombre </h6>
                    <br>

                    <label for="apellido">Apellido</label>
                    <input value="{{$propiedad->apellido}}" type="text" name="apellido" id="apellido"
                        class="form-control" placeholder="" aria-describedby="helpApellido" required>
                    <h6 id="helpApellido" class="text-muted">Por favor ingrese el nombre </h6>
                    <br>

                    <label for="telefono">Teléfono</label>
                    <input value="{{$propiedad->telefono}}" type="number" name="telefono" id="telefono"
                        class="form-control" placeholder="" aria-describedby="helpTelefono" required>
                    <h6 id="helpTelefono" class="text-muted">Por favor ingrese el teléfono </h6>
                    <br>

                    <label for="direccion">Dirección</label>
                    <input value="{{$propiedad->direccion}}" type="text" name="direccion" id="direccion"
                        class="form-control" placeholder="" aria-describedby="helpDir" required>
                    <h6 id="helpDir" class="text-muted">Por favor ingrese el direccion </h6>
                    <br>

                    <label for="correo">Correo</label>
                    <input value="{{$propiedad->correo}}" type="text" name="correo" id="correo" class="form-control"
                        placeholder="" aria-describedby="helpcor" required>
                    <h6 id="helpcor" class="text-muted">Por favor ingrese el correo </h6>
                    <br>

                  
                    <input value="{{$propiedad->contrasena}}" type="hidden" name="contrasena" id="contrasena" class="form-control" aria-describedby="helpcontra" required>
                    @endforeach
                    <br>
                    <input class="form-control btn btnCrear btn-default" type="submit" value="Enviar">

                </div>
        </div>
    </div>
</div>
</div>
</div>


</form>




@endsection