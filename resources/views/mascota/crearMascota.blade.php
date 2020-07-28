@extends('plantilla.plantilla')

@section('titulo','Crear mascota')

@section('contenido')


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
        <input type="number" name="numChip" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el número de idenficación.</small>
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el nombre. </small>
        <br>
        <label for="especie">Especie</label>
        <input type="text" name="especie" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el especie. </small>
        <br>
        <label for="sexo">Sexo</label>

        <div class="form-check form-check-inline">
            <label class="form-check-label"> 
                <br>
                <input class="form-check-input ml-3" type="checkbox" name="sexo" id="" value="1"> Macho
            </label>
            <label class="form-check-label"> 
                <br>
                <input class="form-check-input ml-3" type="checkbox" name="sexo" id="" value="0"> Hembra
            </label>
        </div>

        <small id="helpId" class="text-muted">Por favor ingrese el sexo de la mascota. </small>
        <br>
        <label for="raza">Raza</label>
        <input type="text" name="raza" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el raza. </small>
        <br>
        <label for="fecNacimi">Fecha de Nacimiento</label>
        <input type="date" name="fecNacimi" id="" class="form-control" placeholder="" aria-describedby="helpId">
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