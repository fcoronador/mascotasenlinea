
<div id="paneHistoria" class="col-sm-9 container-fluid mt-3 show">
   
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h4 style="text-align: center">Historia Clinica</h4>

            <table id="table_id" class="table table-striped table-inverse table-responsive">
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
    </div>
</div>
</div>


<div id="paneVacunas" class="col-sm-9 container-fluid mt-3 collapse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
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
</div>
</div>
</div>

<div id="paneDespa" class="col-sm-9 container-fluid mt-3 collapse"">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">       
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
</div>
</div>
</div>

<div id="paneExam" class="col-sm-9 container-fluid mt-3 collapse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">        
                <h4 style="text-align: center">Historial de examenes</h4>                 
     
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
</div>
</div>
</div>

<div id="paneControl" class="col-sm-9 container-fluid mt-3 collapse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">   
                <h4 style="text-align: center">Historial de Controles</h4>

                        @foreach ($controles as $item)
                        <table id="controles" class="table table-striped table-inverse table-responsive">
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
                    </div>
                </div>
                </div>
</div>

<div id="panePeso" class="col-sm-9 container-fluid mt-3 collapse">
    <div class="card-body" style="height: 80vh; width: 60vw;">
        <h4 style="text-align: center">Variación del Peso</h4>
        <canvas id="pesoHistoria" width="" height=""></canvas>
        <script>
            var eti1 = {!! json_encode($fechas) !!};
            var val1 = {!! json_encode($pesos) !!};
        </script>
      </div>

</div>