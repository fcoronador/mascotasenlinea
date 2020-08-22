@extends('plantilla.plantillaAdmin')

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
                    <input type="date" name="fecha" id="" class="form-control" placeholder=""
                        aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Por favor ingrese la fecha</small>
                    <br>
                    <label for="hora">Hora</label>
                    <input type="time" name="hora" id="" class="form-control" placeholder=""
                        aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Por favor ingrese la hora </small>
                    <br>

                    <label for="motivo">Motivo</label>
                    <input name="motivo" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Por favor ingrese el motivo </small>
                    <br>

                    <label for="servicios">Servicio</label>

                    <select class="form-control" name="idServi" id="">
                        @foreach ($servicios as $item)
                        <option value="{{$item->idServi}}">{{$item->servicios}}</option>
                        @endforeach
                    </select>


                    <small id="helpId" class="text-muted">Por favor seleccione el servicio </small>
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