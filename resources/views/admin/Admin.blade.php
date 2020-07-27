@extends('plantilla.plantilla')


@section('titulo','Administración')

@section('contenido')

<div class="row">
    <div class="col-12 col-sm-6 col-lg-12">
        <div class="container">
            <h1 class="my-3">Panel Administrativo</h1>
        </div>

        <div class="d-flex flex-row container">
           
            @include('plantilla.sidebar')
            @include('plantilla.viewsAdm')
            
        </div>
    </div>
</div>




@endsection