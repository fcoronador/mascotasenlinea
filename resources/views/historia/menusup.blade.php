
{{-- @dump($historia)
 --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @if (session('rol')===3 )
    <button class="btn btn-primary" id="menu-toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    @endif
    @foreach ($historia as $item)
    <h5 class="navbar-brand mx-auto cardtitle">Historia Clínica de: {{$item->nombre}} </h5>
    @endforeach
    </nav>
    <div class="col-sm-12 container-fluid mt-3" id="menu-wrapper">

    <nav class="nav nav-tabs nav-stacked">
        <a id="ItemHistoria" class="nav-link active" id="nav-home" data-toggle="tab" href="#">Historia Clinica</a>
        <a id="ItemVacunas" class="nav-link" data-toggle="tab" href="#">Vacunas</a>
        <a id="ItemDesp" class="nav-link" data-toggle="tab" href="#">Desparacitaciones</a>
        <a id="ItemExamen" class="nav-link" data-toggle="tab" href="#">Exámenes</a>
        <a id="ItemControl" class="nav-link" data-toggle="tab" href="#">Controles</a>
        <a id="ItemPeso" class="nav-link" data-toggle="tab" href="#">Peso</a>
    </nav>
</div>