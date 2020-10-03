
@dump($historia)

<div class="col-sm-11 container-fluid mt-3" id="menu-wrapper">
    <button class="btn btn-primary" id="menu-toggle">
        <i class="fa fa-building" aria-hidden="true"></i>
    </button>
    <span class="navbar-brand mx-5">Historia Clínica de: {{-- {{$historia->nombre}} --}}</span>

    <nav class="nav nav-tabs nav-stacked">
        <a id="ItemHistoria" class="nav-link active" id="nav-home" data-toggle="tab" href="#">Historia Clinica</a>
        <a id="ItemVacunas" class="nav-link" data-toggle="tab" href="#">Vacunas</a>
        <a id="ItemDesp" class="nav-link" data-toggle="tab" href="#">Desparacitaciones</a>
        <a id="ItemExamen" class="nav-link" data-toggle="tab" href="#">Exámenes</a>
        <a id="ItemControl" class="nav-link" data-toggle="tab" href="#">Controles</a>
        <a id="ItemPeso" class="nav-link" data-toggle="tab" href="#">Peso</a>
    </nav>
</div>