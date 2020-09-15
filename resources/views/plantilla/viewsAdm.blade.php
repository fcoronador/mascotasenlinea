<div id="page-content-wrapper"> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">
            <i class="fa fa-building" aria-hidden="true"></i>
        </button>
        @if (session('rol') == 1 )
            <span class="navbar-brand mx-5"> Bienvenido Admin. {{session('nombre')}}&nbsp;{{session('apellido')}} </span>
        @endif
        @if (session('rol') == 2 )
        <span class="navbar-brand mx-5"> Bienvenido Vet. {{session('nombre')}}&nbsp;{{session('apellido')}} </span>
        @endif
    </nav>

    <div id="paneCliente" class="container show">
        <h1 class="mt-4">Clientes</h1>
        <a href="{{route('indexcliente')}}" class="btn btn-primary">Lista de clientes</a>
        {{-- <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on
            larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is
            optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which
            will toggle the menu when clicked.</p> --}}
        <div class="card-body"  style="height: 80vh; width: 60vw;">
                <h3>Cantidad de clientes creados por mes</h3>
                <canvas id="myChart1" width="" height=""></canvas>
                <script>
                    var eti1 = {!! json_encode($cantidadCli['etiquetas']) !!};
                    var val1 = {!! json_encode($cantidadCli['valor']) !!};
                </script>
        </div>
    </div>

    <div id="paneMascota" class="container collapse">
        <h1 class="mt-4">Mascotas</h1>
        <a href="{{route('indexmascota')}}" class="btn btn-primary">Lista de Mascotas</a>
        {{-- <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on
            larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is
            optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which
            will toggle the menu when clicked.</p> --}}
            <div class="card-body">
                <h3>Cantidad de mascotas creados por mes</h3>
                <canvas id="myChart2" width="" height=""></canvas>
                <script>
                    var eti2 = {!! json_encode($cantidadMasco['etiquetas']) !!};
                    var val2 = {!! json_encode($cantidadMasco['valor']) !!};
                </script>
            </div>
    </div>

    <div id="paneControles" class="container collapse">
        <h1 class="mt-4">Controles</h1>
        <a href="{{route('indexcontrol')}}" class="btn btn-primary">Lista de Controles</a>
        {{-- <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on
            larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is
            optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which
            will toggle the menu when clicked.</p> --}}
            <div class="card-body">
                <h3>Cantidad de controles creados por mes</h3>
                <canvas id="myChart3" width="" height=""></canvas>
            </div>
            <div class="card-body">
                <h3></h3>
                <canvas id="myChart4" width="" height=""></canvas>
                <script> 
                    var eti3 = {!! json_encode($cantidadControl['etiquetas']) !!};
                    var val3 = {!! json_encode($cantidadControl['valor']) !!};
                    var eti4= {!! json_encode($cantidadCli['etiquetas']) !!};
                    var val4=  {!! json_encode($cantidadCli['valor']) !!};
                </script>
            </div>

    </div>

    <div id="paneProcedimientos" class="container collapse">
        <h1 class="mt-4">Procedimientos</h1>
        <a href="{{route('indexprocedi')}}" class="btn btn-primary">Lista de Procedimientos</a>
    </div>

    <div id="paneVacunas" class="container collapse">
        <h1 class="mt-4">Vacunas</h1>
        <a href="{{route('indexvacuna')}}" class="btn btn-primary">Lista de Vacunas</a>

    </div>
    <div id="paneExamenes" class="container collapse">
        <h1 class="mt-4">Exámenes</h1>
        <a href="{{route('indexexamen')}}" class="btn btn-primary">Lista de Examenes</a>

    </div>
    <div id="paneDesparas" class="container collapse">
        <h1 class="mt-4">Desparacitantes</h1>
        <a href="{{route('indexdespara')}}" class="btn btn-primary">Lista de Desparacitantes</a>

    </div>
    {{-- <div id="paneServicios" class="container collapse">
        <h1 class="mt-4">Servicios</h1>
        <a href="{{route('servicios')}}" class="btn btn-primary">Lista de Servicios</a>
    </div> --}}
    <div id="paneCitas" class="container collapse">
        <h1 class="mt-4">Citas</h1>
        
            
            <a href="{{route('indexcliente')}}" class="btn btn-primary">Agendar cita</a>
            <div class="card-body"  style="height: 80vh; width: 60vw;">
      
            <h3>Cantidad de citas atendidas en el mes</h3>
            <canvas id="myChartCitas1" width="" height=""></canvas>
            <script> 
                var eticita1 = {!! json_encode($cantidadCitas['etiquetas']) !!};
                var valcita1 = {!! json_encode($cantidadCitas['valor']) !!};
            
            </script>       
             </div>
       



    </div>
    
    <div id="paneVete" class="container collapse">
        <h1 class="mt-4">Veterinarios</h1>
        <a href="{{route('indexveterinarios')}}" class="btn btn-primary">Lista de Veterinarios</a>

        <div class="card-body"  style="height: 80vh; width: 60vw;">
      
            <h3>Cantidad de citas atendidas en el mes</h3>
            <canvas id="myChartVet" width="" height=""></canvas>
            <script> 
                var etivet1 = {!! json_encode($cantidadVet['etiquetas']) !!};
                var valvet1 = {!! json_encode($cantidadVet['valor']) !!};
            
            </script>       
             </div>
    </div>
</div>

