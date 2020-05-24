@php
// Testeo de de conexion con la base de datos
/* if(DB::connection())
   {
     $matriz= DB::select('select * from cliente');
     dd($matriz);
   }
*/
@endphp


@extends('plantilla.plantilla')

@section('titulo','Mascotas en línea')

@section('contenido')

<div class="col-sm-12 container-fluid mt-3">
       
    <div class="card-deck">
      <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-sm-4">
          
          <tr><td><br></td></tr>
          <img src="/img/eventos.png" class="img-fluid cardimg" alt="Responsive image"> 
        </div>
        <div class="col-md-8" align="center">
          <div class="card-body">
            <h5 class="card-title titulo">EVENTOS</h5>
            <p class="card-text">Este mes estamos premiando a la mascota con la mejor pinta navideña!! No te quedes sin participar</p>
            <a href="#" class="btn btn-primary">Ver más</a>
    
          </div>
        </div>
      </div>
    </div>
        <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-sm-4">
          <tr><td><br></td></tr>
          <img src="/img/vacuna.png" class="img-fluid cardimg" alt="Responsive image">
        </div>
        <div class="col-md-8" align="center">
          <div class="card-body">
            <h5 class="card-title titulo">VACUNAS</h5>
            <p class="card-text">No olvides vacunar a tus mascotas, agenda una cita y visítanos</p>
           
            <a href="{{route('citas')}}" class="btn btn-primary">Agendar Cita</a>
          </div>
        </div>
      </div>
    </div>
      <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-sm-4">
          <tr><td><br></td></tr>
          <img src="/img/blog.png" class="img-fluid cardimg" alt="Responsive image">
        </div>
        <div class="col-md-8 " align="center">
          <div class="card-body">
            <h5 class="card-title titulo">BLOG</h5>
            <p class="card-text">Lee los mejores consejos para el cuidado de tus mascotas aquí</p>
            <a href="#" class="btn btn-primary">Blog</a>
          </div>
        </div>
      </div>
    </div>
    </div> 
</div>

@endsection

