@extends('plantilla.plantillaAdmin')

@section('titulo','Mascotas en línea')

@section('contenido')

{{-- @dump($nombre) --}}




<div class="container">
    <h1 class="my-3">CITAS</h1>

    


        <div class="card col-sm-11">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title">Agenda tu cita</h4>
                <p class="card-text">¿Necesitas programar una cita? <br>
                    Llena el formulario y estaremos felices de atenderte</p>

                <form action="{{route('guardarcita')}}" method="post">
                    @csrf
                    <div class="form-group">
                        

                        


                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted">Por favor ingrese la fecha</small>
                        <br>
                        <label for="hora">Hora</label>
                        <input type="time" min="09:00:00" max="19:00:00" step="900" name="hora" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted">Horario de atención 9AM - 7PM cada 15 min</small>
                        <br>

                        <label for="motivo">Motivo</label>
                        <input name="motivo" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted">Por favor ingrese el motivo </small>
                        <br>

                        <label for="servicios">Servicio</label>
                        
                        <select class="form-control" name="idServi" id="">
                            @foreach ($servicios as $item)
                            @if ($item->visible)
                            <option value="{{$item->idServi}}">{{$item->servicios}}</option>
                            @endif
                            @endforeach
                        </select>

                        <small id="helpId" class="text-muted">Por favor seleccione el servicio </small>
                        <br>

                        <label for="veterinario">Veterinario</label>
                        
                        <select class="form-control" name="idVeterin" id="">
                            @foreach ($veterinario as $item)
                            @if ($item->visible)
                            <option value="{{$item->idVeterin}}">{{$item->nombre}}</option>
                            @endif
                            @endforeach
                        </select>

                        <small id="helpId" class="text-muted">Por favor seleccione el Veterinario </small>
                        <br>

                        <input type="submit" class="btn btnCrear btn-default" value="Enviar">

                    </div>
                </form>

               

            </div>
        </div>
    </div>

</div>


@endsection