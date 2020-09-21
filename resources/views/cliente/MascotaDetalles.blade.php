@extends('plantilla.plantilla')

@section('titulo','Editar mascota')

@section('contenido')



@foreach ($mascota as $propiedad)


<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            <h1 class="">Editar mascota: {{$propiedad->nombre }} {{$propiedad->especie}}</h1>
            <br>
            <h2>Dueño: {{$propiedad->NombreCli}} {{$propiedad->ApellCli}} </h2>
            <hr>
            <form action="{{route('actualizarmascota',$id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="patch">
                <input type="hidden" value="{{$propiedad->ID}}" name="idCedula">

                <div class="form-group col-8 mx-auto">
                    <label for="idCedula">Número de identificación</label>


                    <input type="number" name="numChip" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{$propiedad->numChip}}" readonly>
        

                    <label for="nombre">Nombre</label>
                    <input value="{{$propiedad->nombre}}"min="3" max="40" required
                    type="text" name="nombre" id="nombre" class="form-control" aria-describedby="helpNombre" >
                    <h6 id="helpNombre" class="text-muted">Por favor ingrese el nombre </h6>
                        
                    <label for="especie">Especie</label>
                    <input value="{{$propiedad->especie}}"  type="text" name="especie" id="especie" class="form-control" placeholder="" aria-describedby="Helpesp" required>
                    <h6 id="Helpesp" class="text-muted">Por favor ingrese el especie. </h6>

                    <label for="sexo">Sexo</label>
                    <div class="form-check form-check-inline">

                        <label class="form-check-label">
                            <br>
                            <input class="form-check-input ml-3" type="radio" name="sexo" id="sexo" value="1"
                             @if ($propiedad->sexo ===1) checked @endif>
                            Macho
                        </label>

                        <label class="form-check-label">
                            <br>
                            <input class="form-check-input ml-3" type="radio" name="sexo" id="sexo" value="2" 
                            @if ($propiedad->sexo===2) checked @endif> Hembra
                        </label>

                    </div>
                    <br>

                    <label for="raza">Raza</label>
                    <input value="{{$propiedad->raza}}"type="text" name="raza" id="raza" class="form-control" placeholder="" aria-describedby="Helpraz" required>
                    <h6 id="Helpraz" class="text-muted">Por favor ingrese la raza. </h6>
                    <br>

                    <label for="fecNacimi">Fecha de nacimiento</label>
                    <input value="2011-08-19" type="date" name="fecNacimi" id="" class="form-control" placeholder="" aria-describedby="helpId" required >
                    <br>
                    <label for="fecEsterili">Fecha de Esterilización</label>
                    <input value="{{$propiedad->fecEsterili}}" type="date" name="fecEsterili" id="" class="form-control"
                        placeholder="" aria-describedby="helpId">
                    @endforeach
                    <br>
                    <input class="form-control" type="submit" value="Enviar">

                </div>
        </div>
    </div>
</div>

</form>

@endsection