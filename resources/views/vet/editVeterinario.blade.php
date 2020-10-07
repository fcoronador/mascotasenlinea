@extends('plantilla.plantillaAdmin')

@section('titulo','Editar Servicio')

@section('contenido')



@foreach ($veterinario as $propiedad)

<div class="row">
    <div class="col-12 col-sm-10 col-lg-10 mx-auto">
        <div class="container p-3">
            <h1 class="">Editar veterinario: {{$propiedad->nombre}}</h1>
            <hr>
            <form action="{{route('actualizarveterinario',$id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="patch">

                <div class="form-group col-8 mx-auto">
                    <label for="idVeterin">Id del veterinario</label>

                    <input type="number" name="idVeterin" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{$propiedad->idVeterin}}" readonly>
                    <br>

                    <label for="nombre">Nombre del Veterinario</label>
                    <input value="{{$propiedad->nombre}}" type="text" name="nombre" id="" class="form-control"
                        placeholder="" aria-describedby="helpId" required>
                    <br>
                    
                    @endforeach
                    <br>
                    <input class="form-control" type="submit" value="Enviar">
                </div>
        </div>
    </div>
</div>
</form>


@endsection