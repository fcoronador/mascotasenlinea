@extends('plantilla.plantillaAdmin')


@section('titulo','Administración')

@section('contenido')

<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            <div class="d-flex" id="wrapper">
        @include('plantilla.sidebar')
        @include('plantilla.viewsAdm')
            </div>
       </div>
    </div>
</div>
       
    
@endsection