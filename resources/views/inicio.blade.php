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



@if(session('estado'))
<div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('estado')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif
@if(session('alerta'))
<div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('alerta')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif


<div class="col-sm-12 container-fluid mt-3">

    <div class="card-deck">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-sm-4">

                    <tr>
                        <td><br></td>
                    </tr>
                    <img src="/img/eventos.png" class="img-fluid cardimg responsive" alt="Responsive image">
                </div>
                <div class="col-md-8" align="center">
                    <div class="card-body">
                        <h5 class="card-title titulo">EVENTOS</h5>
                        <p class="card-text">Este mes estamos premiando a la mascota con la mejor pinta navideña!! No te
                            quedes sin participar</p>
                        <a href="#" class="btn btn-primary">Ver más</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <tr>
                        <td><br></td>
                    </tr>
                    <img src="/img/vacuna.png" class="img-fluid cardimg responsive" alt="Responsive image">
                </div>
                <div class="col-md-8" align="center">
                    <div class="card-body">
                        <h5 class="card-title titulo">VACUNAS</h5>
                        <p class="card-text">No olvides vacunar a tus mascotas, agenda una cita y visítanos</p>

                        <a href="{{route('indexcliente')}}" class="btn btn-primary">Agendar Cita</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <tr>
                        <td><br></td>
                    </tr>
                    <img src="/img/blog.png" class="img-fluid cardimg responsive" alt="Responsive image">
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




<!-- Modal -->
<div class="modal fade" id="registroModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('registrocliente')}}" method="POST">
                @csrf
                    <div class="form-group">
                        
                        
                        <label for="idCedula">Número de identificación</label>
                        <small>  <label for="idCedula" id="helpidCed"> </label> </small>
                        <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                        <input type="number" id="idCedula" name="idCedula" id="" class="form-control" placeholder="" size="10">
                        </div>

                        <label for="correo">Correo electrónico</label>
                        <div class="input-group margin-bottom-sm">
                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                        <input type="email" name="correo" id="" class="form-control" placeholder="" size="10">
                        </div>
                           
                        <label for="password">Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input type="password" name="password" id="" class="form-control" placeholder="" size="10">
                        </div>

                        <label for="confirmar">Confirmar Contraseña</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input type="password" name="confirmar" id="" class="form-control" placeholder="" size="10">
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <input class="btn btnCrear btn-default" type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="loginModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title " id="staticBackdropLabel">Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="correo">Correo electrónico</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            <input type="email" name="correo" id="" class="form-control" placeholder="" size="10">
                            </div>
                            <label for="password">Contraseña</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input type="password" name="password" id="" class="form-control" placeholder="" size="10">
                            </div>
                        </div>
            </div>
            <div class="modal-footer">
                <input class="btn btnCrear btn-default" type="submit" value="Entrar">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection