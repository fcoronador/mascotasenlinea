@extends('plantilla.plantilla')

@section('titulo','Editar Cita')

@section('contenido')

{{-- @dump($citas)
 --}}

 @foreach ($citas as $propiedad)


 <div class="row">
     <div class="col-12 col-sm-10 col-lg-10 mx-auto">
         <div class="container p-3">
             <h1 class="">Editar cita: {{$propiedad->fecha }} {{$propiedad->hora}}</h1>
             <hr>
             <form action="{{route('actualizarcita',$id)}}" method="post">
                 @csrf
                 <input type="hidden" name="_method" value="patch">
 
                 <div class="form-group col-8 mx-auto">
                     <label for="fecha">Fecha</label>
 
 
                     <input name="fecha" id="" class="form-control" placeholder=""
                         aria-describedby="helpId" value="{{$propiedad->fecha}}">
                     <br>
 
                     <label for="hora">Hora</label>
                     <input value="{{$propiedad->hora}}" type="text" name="hora" id="" class="form-control"
                         placeholder="" aria-describedby="helpId">
                     <br>
 
                     <label for="Motivo">Motivo</label>
                     <input value="{{$propiedad->Motivo}}" type="text" name="Motivo" id="" class="form-control"
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