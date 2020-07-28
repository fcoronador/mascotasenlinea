@extends('plantilla.plantilla')

@section('titulo','Crear control')

@section('contenido')


<h1 class="my-3">Crear control</h1>
<div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
        <div class="container">
    <form action="{{route('guardarcontrol')}}" method="post"> 
        @csrf
        <div class="form-group">

        <label for="idVeterin">Seleccione un Veterinario</label>
        <select  class="custom-select" name="idVeterin" id="">
                @foreach ($veterin as $item)
        <option value="{{$item->idVeterin}}">{{$item->nombre}} , {{$item->cargo}}</option>
                @endforeach
        </select>

        <label for="idMascota">Seleccione una Mascota</label>
        <select  class="custom-select" name="idMascota" id="">
                @foreach ($mascotas as $item)
        <option value="{{$item->idMascota}}">{{$item->Mascota}} </option>
                @endforeach
        </select>

        
        <label for="fecha">Fecha y Hora</label>
        <input type="datetime-local" name="fecha" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el fecha y hora del control. </small>
        <br>
        <label for="peso">Peso</label>
        <input type="number" name="peso" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Por favor ingrese el peso. </small>
        <br>
        <label for="diagnos">Diagnóstico</label>
        <textarea class="form-control" id="" name="diagnos" rows="6">Escribe aquí el diagnóstico.</textarea>
        <small id="helpId" class="text-muted">Por favor ingrese el diagnóstico. </small>
        <br>
        <label for="trata">Tratamiento</label>
        <textarea class="form-control" id="" name="trata" rows="6">Escribe aquí el tratamiento.</textarea>
        <small id="helpId" class="text-muted">Por favor ingrese el tratamiento. </small>
        <br>
        <label for="observ">Observaciones</label>
        <textarea class="form-control" id="" name="observ" rows="6">Escribe aquí las observaciones.</textarea>
        <small id="helpId" class="text-muted">Por favor ingrese las observaciones. </small>
        <br>
        
        <input type="submit" value="Enviar">

            </div>
        </div>
    </div>
</div>


</form>
    



@endsection