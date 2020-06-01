@extends('plantilla.plantilla')

@section('titulo','Mascotas en línea')

@section('contenido')

{{-- @dump($citas)
 --}}


<h1 class="">CITAS</h1>

<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Tus próximas citas</h4>
            <p class="card-text">¡Estamos ansiosos por verte! Te esperamos el día: </p>
        </div>
        <div class="card-body">
                @foreach ($citas as $item)
                <a name="" id="" class="btn btn-primary" href="#" role="button"> {{$item->fecha}}</a>
                @endforeach
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Agenda tu cita</h4>
            <p class="card-text">¿Necesitas programar una cita? <br> 
                Llena el formulario y estaremos felices de atenderte</p>
            
        </div>
    </div>
</div>




@endsection