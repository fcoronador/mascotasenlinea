@extends('plantilla.plantilla')

@section('titulo','Crear mascota')

@section('contenido')

<span class="invalid-feeback text-danger" role="alert">
    {!! $errors->first('descripcion','<small>:message</small><br>')!!}    
</span>

@php
    if($errors->first('raza'))
    {
        echo '<script> alert("'.$errors->first('raza',':message').'") </script>';
    }
@endphp


@if (session('rol')===1 || session('rol') == 2 )

<div class="container">
    <h1 class="my-3">Crear mascota</h1> 

@endif

@if (session('rol')===3 )

<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3" id="panel">
            <div class="d-flex" id="wrapper">
                    
    <div class="bg-light border-right hist" id="sidebar-wrapper">
        <div class="sidebar-heading">Menú</div>
        <div class="list-group list-group-flush ">
           

 <div class="vertical-menu">
    <a class="navuser nav-item nav-link activo" href="{{route('usuario')}}">Mis Mascotas</a>
        <a class="navuser nav-item nav-link " href="{{route('actualizarUser',session('idCedula'))}}">Actualizar Datos<span
                class="sr-only">(current)</span></a>
        <a class="navuser  nav-item nav-link" href="{{route('perfilUser',session('idCedula'))}}">Perfil</a>
        <a class="navuser nav-item nav-link" href="{{route('mostrarcita',session('idCedula'))}}">Citas</a>
        <a class="navuser1 nav-item nav-link" href="{{route('mascotaUser',session('idCedula'))}}">Crear mascota</a>
    </div>
</div>
</div>



    <div id="page-content-wrapper">  
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    
        <button class="btn btn-primary" id="menu-toggle">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <h5 class="navbar-brand mx-auto cardtitle">Crear Mascota</h5>
        </nav>



@endif

<div class="col-12 col-sm-10 col-lg-10 mx-auto">
    <div class="row">


        <div class=" card card-body">
    <form action="{{route('guardarmascota')}}" method="post">
        @csrf
        <div class="form-group container p-3 col-8 mx-auto">
        


        <input type="hidden" name="idCedula" value="{{session('idCedula')}}">

        <label for="numChip">Número de Chip</label>
        <input type="number" name="numChip" id="numChip" class="form-control" placeholder="" aria-describedby="Helpchip">
        <h6 id="Helpchip" class="text-muted">Por favor ingrese el número de idenficación.</h6>

        <label for="nombre">Nombre</label>
        <input min="3" max="40" required
        type="text" name="nombre" id="nombre" class="form-control" aria-describedby="helpNombre" >
        <h6 id="helpNombre" class="text-muted">Por favor ingrese el nombre </h6>
        
        <label for="especie">Especie</label>
        <input type="text" name="especie" id="especie" class="form-control" placeholder="" aria-describedby="Helpesp" required>
        <h6 id="Helpesp" class="text-muted">Por favor ingrese el especie. </h6>

        <label for="sexo">Sexo</label>
        <div class="form-check form-check-inline">
            <label class="form-check-label"> 
                <br>
                <input class="form-check-input ml-3" type="radio" name="sexo" id="" value="1"> Macho
            </label>
            <label class="form-check-label"> 
                <br>
                <input class="form-check-input ml-3" type="radio" name="sexo" id="" value="2"> Hembra
            </label>
        </div>
       <br>
        <label for="raza">Raza</label>
        <input type="text" name="raza" id="raza" class="form-control" placeholder="" aria-describedby="Helpraz" required>
        <h6 id="Helraz" class="text-muted">Por favor ingrese la raza. </h6>
        <span> {!!$errors->first('raza',':message') !!}</span>

        <label for="fecNacimi">Fecha de Nacimiento</label>
        <input type="date" name="fecNacimi" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
        <small id="helpId" class="text-muted">Por favor ingrese el fecha de nacimiento. </small>
        <br>
        <label for="fecEsterili">Fecha de Esterilización</label>
        <input type="date" name="fecEsterili" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese la fecha de esterilización. </small>
        <br>
        <input type="submit" class="btn btnCrear btn-default" value="Enviar">

            </div>
        </div>
    </div>
</div>
</div>
</div>
</form>

@endsection

