@extends('plantilla.plantillaAdmin')

@section('titulo','Editar procedimiento')

@section('contenido')

@foreach ($procedi as $propiedad)


<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            <h1 class="">Editar procedimiento: </h1>
            <hr>
            <form action="{{route('actualizarprocedimiento',$id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <label for="idProc">Número de procedimiento</label>
                    <input type="number" name="idProc" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{$propiedad->idProc}}" readonly>
                        <br>
                        
                <div class="form-group">

                <label for="mascota">Mascotas</label>
                    <select class="form-control" name="idMascotas" id="">
                        @foreach ($mascotas as $item)
                            @if ($item->visible)
                                <option value="{{$item->idMascotas}}">{{$item->Mascota}}</option>
                            @endif
                        @endforeach
                    </select>

                <small id="helpId" class="text-muted">Por favor seleccione la mascota </small>
                <br>

                <label for="veterinario">Veterinarios</label>
                    <select class="form-control" name="idVeterin" id="">
                        @foreach ($veterinario as $item)
                            @if ($item->visible)
                                <option value="{{$item->idVeterin}}">{{$item->nombre}}</option>
                            @endif
                        @endforeach
                    </select>

                <small id="helpId" class="text-muted">Por favor seleccione el veterinario</small>
                <br>

                <label for="vacuna">Vacunas</label>
                    <select class="form-control" name="idVacun" id="">
                        @foreach ($vacunas as $item)
                            @if ($item->visible)
                                <option value="{{$item->idVacun}}">{{$item->nombre}}</option>
                            @endif
                        @endforeach
                    </select>

                <small id="helpId" class="text-muted">Por favor seleccione la vacuna</small>
                <br>

                <label for="desparaci">Desparacitantes</label>
                    <select class="form-control" name="idDespara" id="">
                        @foreach ($desparas as $item)
                            @if ($item->visible)
                                <option value="{{$item->idDespara}}">{{$item->nombre}}</option>
                            @endif
                        @endforeach
                    </select>

                <small id="helpId" class="text-muted">Por favor seleccione el desparacitante</small>
                <br>

                <label for="examen">Examenes</label>
                    <select class="form-control" name="idExam" id="">
                        @foreach ($examenes as $item)
                            @if ($item->visible)
                                <option value="{{$item->idExam}}">{{$item->tipo}}</option>
                            @endif
                        @endforeach
                    </select>

                <small id="helpId" class="text-muted">Por favor seleccione el examen</small>
                <br>

                    <label for="fecha">Fecha del procedimiento</label>
                    <input value="{{$propiedad->fecha}}" type="date" name="fecha" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>

                    <label for="sigDosis">Fecha del siguiente procedimiento</label>
                    <input value="{{$propiedad->sigDosis}}" type="date" name="sigDosis" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    <br>

                    @endforeach
                    <br>
                    <input class="form-control" type="submit" value="Enviar">

                </div>
        </div>
    </div>
</div>
</form>

@endsection