@extends('plantilla.plantillaAdmin')

@section('titulo','Mascotas en línea')

@section('contenido')

{{-- @dump($nombre) --}}




<div class="container">
    <h1 class="my-3">CITAS</h1>

    <div class="card-deck">
        <div class="card col-sm-9">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title">Tus próximas citas </h4>
                <p class="card-text">¡Estamos ansiosos por verte! Te esperamos el día: </p>

                {{-- @foreach ($citas as $item)
                <a name="" id="" class="btn btn-primary" href="#" role="button"> {{$item->fecha}}</a>
                @endforeach --}}

                <div class="table-responsive my-2 table-striped tablaCitas">
                    <table class="table table-hover table-responsive" id="citas">
                        <thead>
                            <tr>
                                
                                <th scope="col">Fecha</th>
                                {{-- <th scope="col">ID</th> --}}
                                <th scope="col">Hora</th>
                                <th scope="col">Motivo</th>
                                <th scope="col">Servicio</th>
                                <th scope="col">Veterinario</th>
                                <th scope="col">Opciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($citas as $item)
                            @if ($item->visible)

                            <tr class="tablaCitas"> {{-- Aqui van impresiones de la variable --}}
                                {{-- @dump($item) --}}
                                <th scope="row">{{$item->Fecha}}</th>
                                {{-- <td>{{$item->idCita}}</td> --}}
                                <td>{{$item->Hora}}</td>
                                <td>{{$item->Motivo}}</td>
                                <td>{{$item->Servicio}}</td>
                                <td>{{$item->Veterinario}}</td>
                                <td>
                                    <a name="" id="" class="btn btn-primary btn-sm "
                                        href="{{route('editarcita',$item->idCita)}}" role="button">
                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                    </a>

                                    <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                        onclick="document.getElementById('delete{{$item->idCita}}').submit()">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            
                            <form class="d-none" id="delete{{$item->idCita}}"
                            action="{{route('borrarcita',$idCita=$item->idCita)}}" method="post">
                            @csrf
                            @method('delete')
                            </form>
                            @endif
                        </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>






            </div>
        </div>


        <div class="card col-sm-4">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title">Agenda tu cita</h4>
                <p class="card-text">¿Necesitas programar una cita? <br>
                    Llena el formulario y estaremos felices de atenderte</p>

                <form action="{{route('guardarcita')}}" method="post">
                    @csrf
                    <div class="form-group">

                        <input name="cc" value="{{$cc}}" class="form-control" placeholder="" aria-describedby="helpId"
                            hidden>


                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted">Por favor ingrese la fecha</small>
                        <br>
                        <label for="hora">Hora</label>
                        <input type="time" min="09:00:00" max="19:00:00" step="900" name="hora" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted">Horario de atención 9AM - 7PM cada 15 min</small>
                        <br>

                        <label for="motivo">Motivo</label>
                        <input name="motivo" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                        <small id="helpId" class="text-muted">Por favor ingrese el motivo </small>
                        <br>

                        <label for="servicios">Servicio</label>
                        
                        <select class="form-control" name="idServi" id="">
                            @foreach ($servicios as $item)
                            @if ($item->visible)
                            <option value="{{$item->idServi}}">{{$item->servicios}}</option>
                            @endif
                            @endforeach
                        </select>

                        <small id="helpId" class="text-muted">Por favor seleccione el servicio </small>
                        <br>

                        <label for="veterinario">Veterinario</label>
                        
                        <select class="form-control" name="idVeterin" id="">
                            @foreach ($veterinario as $item)
                            @if ($item->visible)
                            <option value="{{$item->idVeterin}}">{{$item->nombre}}</option>
                            @endif
                            @endforeach
                        </select>

                        <small id="helpId" class="text-muted">Por favor seleccione el Veterinario </small>
                        <br>

                        <input type="submit" class="btn btnCrear btn-default" value="Enviar">

                    </div>
                </form>

               

            </div>
        </div>
    </div>

</div>


@endsection