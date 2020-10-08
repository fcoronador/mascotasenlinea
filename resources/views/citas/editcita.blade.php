{{-- @if (session('rol') ===1 || session('rol') ===2) 
 --}}
@extends('plantilla.plantilla')
{{-- @endif --}}

{{-- 
@if (session('rol') ===3) 
@extends('plantilla.plantilla')
@endif
 --}}
@section('titulo','Editar Cita')

@section('contenido')

{{-- @dump($idCita) --}}


@foreach ($idCita as $propiedad)


 <div class="row">
     <div class="col-12 col-sm-10 col-lg-10 mx-auto">
         <div class="container p-3">
             <h1 class="">Editar cita: {{$propiedad->Fecha }} {{$propiedad->Hora}}</h1>
             <hr>
             <form action="{{route('actualizarcita',$propiedad->idCita)}}" method="post">
                 @csrf
                 <input type="hidden" name="_method" value="patch">
 
                 <div class="form-group col-8 mx-auto">
                    <label for="fecha">Fecha</label>
                    <input type="date" value="{{$propiedad->Fecha }}" name="fecha" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted">Por favor ingrese la fecha</small>
                    <br>
                        <label for="hora">Hora</label>
                        <input type="time" min="09:00:00" max="19:00:00" step="900" name="hora" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required value="{{$propiedad->Hora}}">
                        <small id="helpId" class="text-muted">Horario de atención 9AM - 7PM cada 15 min</small>
                        <br>

                    <label for="motivo">Motivo</label>
                    <input name="motivo" id="" class="form-control" placeholder="" aria-describedby="helpId" required value="{{$propiedad->Motivo}}">
                    <small id="helpId" class="text-muted" >Por favor ingrese el motivo </small>
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

                     @endforeach

                     <br>
                     <input class="form-control btnCrear btn-default" type="submit" value="Enviar">
 
                 </div>
         </div>
     </div>
 </div>
 
 
 </form>

@endsection