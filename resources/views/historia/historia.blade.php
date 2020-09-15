@extends('plantilla.plantilla')

@section('titulo','Panel de Control')

@section('contenido')


@if (session('rol')===3 || session('rol')===2 || session('rol')===1)

<h2>Historia Clinica</h2>

<table class="table table-striped table-inverse table-responsive">
    @foreach ($historia as $item)
    <tr>
        <td>Nombre Cliente</td>
        <td>{{session('nombre')}} &nbsp; {{session('apellido')}}
            <br>
            <small>CC: {{session('idCedula')}}</small>
        </td>
        <td>Nombre Mascota</td>
        <td>{{$item->nombre}} <br>
        <small>Chip: {{$item->numChip}}</small>
        </td>
    </tr>
    <tr>
        <td>Edad</td>
        <td></td>
        <td>Sexo</td>
        <td>
        @if ($item->sexo ==1)
            Macho  
        @else
            Hembra
        @endif
        </td>
    </tr>
    <tr>
        <td>Especie</td>
        <td>{{$item->especie}}</td>
        <td>Raza</td>
        <td>{{$item->raza}}</td>
    </tr>
    <tr>
        <td>Fecha de Nacimiento</td>
        <td>{{$item->fecNacimi}}</td>
        <td>Fecha de esterilización</td>
        <td>{{$item->fecEsterili}}</td>
    </tr>
    @endforeach
</table>
<h2>Historial de Vacunas</h2>
<table id="HisVacunas" class="table table-striped table-inverse table-responsive">
        <thead>
            <tr>
                <th scope="col">Fecha de aplicación</th>
                <th scope="col">Antiguedad</th>
                <th scope="col">Nombre</th>
                <th scope="col">Siguiente Dosis</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vacuna as $item)
            <tr>
                <td>{{$item->Fecha}}</td>
                <td></td>
                <td>{{$item->Vacuna}}</td>
                <td>{{$item->sigDosis}}</td>
            </tr>
            @endforeach
        </tbody>
</table>
<h2>Historial de desparacitaciones</h2>
<table id="HisDespara" class="table table-striped table-inverse table-responsive">
    <thead>
        <tr>
            <th scope="col">Fecha de aplicación</th>
            <th scope="col">Antiguedad</th>
            <th scope="col">Nombre</th>
            <th scope="col">Siguiente Dosis</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($desparaci as $item)
        <tr>
            <td>{{$item->Fecha}}</td>
            <td></td>
            <td>{{$item->Desparacitante}}</td>
            <td>{{$item->sigDosis}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<h2>Historial de examenes</h2>
<table id="HisExa" class="table table-striped table-inverse table-responsive">
    <thead>
        <tr>
            <th scope="col">Fecha del Exámen</th>
            <th scope="col">Tipo de Exámen</th>
            <th scope="col">Resultado</th>
            <th scope="col">Laboratorio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($examen as $item)
        <tr>
            <td>{{$item->Fecha}}</td>
            <td>{{$item->Tipo}}</td>
            <td>{{$item->Resultado}}</td>
            <td>{{$item->Laboratorio}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<h2>Historial de Controles</h2>
@foreach ($controles as $item)
<table  class="table table-striped table-inverse table-responsive">
    <thead>
        <tr>
            <th scope="col">Fecha del Control</th>
            <th scope="col">Peso (Kg) </th>
            <th scope="col">Veterinario</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$item->Fecha}}</td>
            <td>{{$item->Peso}}</td>
            <td>{{$item->Veterinario}}</td>
        </tr>
        <tr>
            <td>Diágnostico</td>
            <td colspan="2">{{$item->Diag}}</td>
        </tr>
        <tr>
            <td>Tratamiento</td>
            <td colspan="2">{{$item->Trata}}</td>
        </tr>
        <tr>
            <td>Observación</td>
            <td colspan="2">{{$item->Obser}}</td>
        </tr>

    </tbody>
</table>
@endforeach




@else

<div class="container my-5">
    <h1> <i class="fa fa-window-close-o" aria-hidden="true"></i> Lo siento no tienes permiso para acceder a este
        contenido</h1>
</div>
@endif

@endsection