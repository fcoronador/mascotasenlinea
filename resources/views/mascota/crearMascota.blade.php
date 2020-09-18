@extends('plantilla.plantillaAdmin')

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


<h1 class="my-3">Crear mascota</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
    <form action="{{route('guardarmascota')}}" method="post">
        @csrf
        <div class="form-group">

        <label for="idCedula">Seleccione un cliente</label>
        <select multiple class="custom-select" name="idCedula" id="">
                @foreach ($clientes as $item)
        <option value="{{$item->idCedula}}">{{$item->nombre}} {{$item->apellido}}</option>
                @endforeach
        </select>

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
        <input type="submit" value="Enviar">

            </div>
        </div>
    </div>
</div>


</form>
    



@endsection