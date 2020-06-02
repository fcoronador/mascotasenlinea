@extends('plantilla.plantilla')

@section('titulo','Inicio')

@section('contenido')

<h1 class="">Crear Mascota</h1>
<hr>
<div class="card-deck">
    <div class="card mb-4" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="card-body">
                <p class="card-text">Para crear tu mascota diligencia los siguientes datos</p>
                    <p class="card-text">Numero de chip</p>
                    <p class="card-text">Nombre mascota</p>
                    <p class="card-text">Especie</p>
                    <p class="card-text">Sexo</p>
                    <p class="card-text">Raza</p>
                    <p class="card-text">Fecha de Nacimiento</p>
                    <p class="card-text">¿Esta estirilizado?</p>
                    <a href="#" class="btn btn-primary">Guardar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

