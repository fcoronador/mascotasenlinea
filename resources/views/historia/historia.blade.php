@extends('plantilla.plantilla')

@section('titulo','Panel de Control')

@section('contenido')


@if (session('rol')===3 || session('rol')===2 || session('rol')===1)

  
<div class="container">
<div class="col-sm-11 container-fluid mt-3">

    <nav class="nav nav-tabs nav-stacked">
        <a class="nav-link active" id="nav-home" data-toggle="tab" href="#home">Historia Clinica</a>
        <a class="nav-link" data-toggle="tab" href="#Vacunas">Vacunas</a>
        <a class="nav-link" data-toggle="tab" href="#Desparacitaciones">Desparacitaciones</a>
        <a class="nav-link" data-toggle="tab" href="#Examenes">Exámenes</a>
        <a class="nav-link" data-toggle="tab" href="#Controles">Controles</a>
        <a class="nav-link" data-toggle="tab" href="#Peso">Peso</a>
    </nav>

{{-- 
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Historia Clinica</a></li>
        <li><a data-toggle="tab" href="#Vacunas">Vacunas</a></li>
        <li><a data-toggle="tab" href="#Desparacitaciones">Desparacitaciones</a></li>
        <li><a data-toggle="tab" href="#Examenes">Exámenes</a></li>
        <li><a data-toggle="tab" href="#Controles">Controles</a></li>
        <li><a data-toggle="tab" href="#Peso">Peso</a></li>
      </ul>
 --}}

      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h4 style="text-align: center">Historia Clinica</h4>
         
            <table class="table table-striped table-inverse table-responsive">
                @foreach ($historia as $item)
                <tr>
                    <td>Nombre Cliente</td>
                    <td>{{$item->NombreCli}} &nbsp; {{$item->ApellCli}}
                        <br>
                        <small>CC: {{$item->ID}}</small>
                    </td>
                    <td>Nombre Mascota</td>
                    <td>{{$item->nombre}} <br>
                        <small>Chip: {{$item->numChip}}</small>
                    </td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td>{{$item->edad}}</td>
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
        </div>

    
        <div class="tab-content">
            <div id="Vacunas" class="tab-pane fade in active">
                <h4 style="text-align: center">Historial de Vacunas</h4>
              
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
        @if ($item->Vacuna != 'N/A')
        <tr>
            <td>{{$item->Fecha}}</td>
            <td>{{$item->anti}}</td>
            <td>{{$item->Vacuna}}</td>
            <td>{{$item->sigDosis}}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
            </div>


            <div class="tab-content">
                <div id="Desparacitaciones" class="tab-pane fade in active">
                    <h4 style="text-align: center">Historial de desparacitaciones</h4>
                    
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
        @if ($item->Desparacitante != 'N/A')
        <tr>
            <td>{{$item->Fecha}}</td>
            <td>{{$item->anti}}</td>
            <td>{{$item->Desparacitante}}</td>
            <td>{{$item->sigDosis}}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
                </div>


                <div class="tab-content">
                    <div id="Examenes" class="tab-pane fade in active">
                        <h4 style="text-align: center">Historial de examenes</h4>                      <p>Some content.</p>
                   
<table id="HisExa" class="table table-striped table-inverse table-responsive">
    <thead>
        <tr>
            <th scope="col">Fecha del Exámen</th>
            <th scope="col">Antiguedad</th>
            <th scope="col">Tipo de Exámen</th>
            <th scope="col">Resultado</th>
            <th scope="col">Laboratorio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($examen as $item)
        @if ($item->Tipo != 'N/A')
        <tr>
            <td>{{$item->Fecha}}</td>
            <td>{{$item->anti}}</td>
            <td>{{$item->Tipo}}</td>
            <td>{{$item->Resultado}}</td>
            <td>{{$item->Laboratorio}}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
                    </div>



                    <div id="Controles" class="tab-pane fade">
                        <h4 style="text-align: center">Historial de Controles</h4>

                        @foreach ($controles as $item)
                        <table class="table table-striped table-inverse table-responsive">
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
                        @endforeach                      </div>
                    </div>


                    <div id="Peso" class="tab-pane fade">
                        <div class="card-body" style="height: 80vh; width: 60vw;">
                            <h4 style="text-align: center">Variación del Peso</h4>
                            <canvas id="pesoHistoria" width="" height=""></canvas>
                            <script>
                                var eti1 = {!! json_encode($fechas) !!};
                                var val1 = {!! json_encode($pesos) !!};
                            </script>
                          </div>
                    </div>



    
</div>

</div>
</div>

@else

<div class="container my-5">
    <h1> <i class="fa fa-window-close-o" aria-hidden="true"></i> Lo siento no tienes permiso para acceder a este
        contenido</h1>
</div>
</div>

@endif

@endsection