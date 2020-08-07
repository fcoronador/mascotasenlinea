@extends('plantilla.plantillaAdmin')

@section('titulo','Editar cliente')

@section('contenido')

@foreach ($cliente as $propiedad)


<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            <h1 class="">Editar cliente: {{$propiedad->nombre }} {{$propiedad->apellido}}</h1>
            <hr>
            <form action="{{route('actualizarcliente',$id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="patch">

                <div class="form-group col-8 mx-auto">
                    <label for="idCedula">Número de identificación</label>


                    <input type="number" name="idCedula" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{$propiedad->idCedula}}" readonly>
                    <br>

                    <label for="nombre">Nombre</label>
                    <input value="{{$propiedad->nombre}}" type="text" name="nombre" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>

                    <label for="apellido">Apellido</label>
                    <input value="{{$propiedad->apellido}}" type="text" name="apellido" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>

                    <label for="telefono">Teléfono</label>
                    <input value="{{$propiedad->telefono}}" type="number" name="telefono" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>
                    <label for="direccion">Dirección</label>
                    <input value="{{$propiedad->direccion}}" type="text" name="direccion" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>
                    <label for="correo">Correo</label>
                    <input value="{{$propiedad->correo}}" type="text" name="correo" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>
                    <label for="contrasena">Contraseña</label>
                    <input value="{{$propiedad->contrasena}}" type="text" name="contrasena" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    @endforeach
                    <br>
                    <input class="form-control" type="submit" value="Enviar">

                </div>
        </div>
    </div>
</div>


</form>




@endsection