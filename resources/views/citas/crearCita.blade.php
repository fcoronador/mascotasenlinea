@extends('plantilla.plantillaAdmin')

@section('titulo','Agendar Cita')

@section('contenido')

{{-- @dump($nombre) --}}





    <h1 class="my-3">Agendar Cita</h1>

    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <div class="container">
                
                

                <form action="{{route('guardarcita2')}}" method="post">
                    
                    @csrf
                    <div class="form-group">
                        
                        <label for="cliente_idCedula">Seleccione un cliente</label>
                        <select multiple class="custom-select" name="cliente_idCedula" id="">
                        @foreach ($clientes as $item)
                        <option value="{{$item->idCedula}}">{{$item->nombre}} {{$item->apellido}}</option>
                         @endforeach
                        </select>


                        
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