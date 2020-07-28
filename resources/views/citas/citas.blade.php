@extends('plantilla.plantilla')

@section('titulo','Mascotas en línea')

@section('contenido')

{{-- @dump($servicios)
 --}}


<h1 class="">CITAS</h1>

<div class="card-deck">
    <div class="card col-sm-7">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Tus próximas citas</h4>
            <p class="card-text">¡Estamos ansiosos por verte! Te esperamos el día: </p>
        </div>
        <div class="card-body">
                {{-- @foreach ($citas as $item)
                <a name="" id="" class="btn btn-primary" href="#" role="button"> {{$item->fecha}}</a>
                @endforeach --}}

                <div class="table-responsive my-2 table-striped tablaCitas">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Motivo</th>
                                <th scope="col">Servicio</th>
                                <th scope="col">Veterinario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($citas as $item)
                            @if ($item->visible)
    
                            <tr class="tablaCitas"> {{-- Aqui van impresiones de la variable --}}
    
                                <th scope="row">{{$item->Fecha}}</th>
                                 <td>{{$item->Hora}}</td>
                                 <td>{{$item->Motivo}}</td>
                                 <td>{{$item->Servicio}}</td>
                                 <td>{{$item->Veterinario}}</td>
                                <td>
                                     <a name="" id="" class="btn btn-primary btn-sm "
                                        href="{{route('editarcita',$item->Fecha)}}" role="button"> Editar</a>
    
                                    <a id="boton_eliminar" class=" btn btn-danger btn-sm "
                                        onclick="document.getElementById('delete{{$item->Fecha}}').submit()">
                                        Borrar
                                    </a>
                                </td>
                            </tr>
                            {{-- <form class="d-none" id="delete{{$item->nombre}}"
                                action="{{route('borrarcliente',$id=$item->idCedula)}}" method="post">
                                @csrf
                                @method('delete')
                            </form> --}}
                            @endif
    
    
                            @endforeach
                        </tbody>
                    </table>
                </div>






        </div>
    </div>


    <div class="card col-sm-5">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Agenda tu cita</h4>
            <p class="card-text">¿Necesitas programar una cita? <br> 
                Llena el formulario y estaremos felices de atenderte</p>
            
                <div class="row" >
                    <div class="col-12 col-sm-10 col-lg-8 mx-auto">
                        <div class="container">
                    <form action="{{route('guardarcita')}}" method="post">
                        @csrf
                        <div class="form-group">
                            
                        <input name="cc" value="{{$cc}}" class="form-control" placeholder="" aria-describedby="helpId" hidden>

                                       
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Por favor ingrese la fecha</small>
                        <br>
                        <label for="hora">Hora</label>
                        <input type="time" name="hora" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Por favor ingrese la hora </small>
                        <br>
                        
                        <label for="motivo">Motivo</label>
                        <input name="motivo" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Por favor ingrese el motivo </small>
                        <br>
                        
                        <label for="servicios">Servicio</label>
                        
                          <select class="form-control" name="idServi" id="">
                            @foreach ($servicios as $item)
                            <option value="{{$item->idServi}}">{{$item->servicios}}</option>
                            @endforeach
                          </select>


                        <small id="helpId" class="text-muted">Por favor seleccione el servicio </small>
                        <br>


                        <input type="submit" class="btn btnCrear btn-default" value="Enviar">
                
                            </div>
                        </div>
                    </div>
                </div>
                
                
                </form>



                {{-- <a name="" id="" class="btn btn-success" href="{{route('guardarcita')}}" role="button">Crear cita</a> --}}

        </div>
    </div>
</div>




@endsection