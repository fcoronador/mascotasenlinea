<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlMascota;
use App\Http\Controllers\ControlContro;
use App\Http\Controllers\ControlVacunas;
use App\Http\Controllers\ControlDesparacitacion;
use App\Http\Controllers\ControlExamenes;

class ControlHistoria extends Controller
{
    private $mascota;
    private $control;
    private $vacunas;
    private $despara;
    private $exa;

    public function __construct()
    {
        $this->mascota =  new ControlMascota();
        $this->control = new ControlContro();
        $this->vacunas = new ControlVacunas();
        $this->despara = new ControlDesparacitacion();
        $this->exa= new ControlExamenes();
    }

    public function index($id)
    {
        if (session('rol') == 1 || session('rol') == 2 || session('rol') == 3) {

            $historia = $this->mascota->HistoriaClinica($id);
            $controles = $this->control->controlHistoria($id);
            $vacuna = $this->vacunas->historiaVacunas($id);
            $desparaci= $this->despara->HistoriaDespara($id);
            $examen =$this->exa->historiaExamen($id);
           
            return view('historia.historia', compact('historia', 'controles','vacuna','desparaci','examen'));
        } else {

            return redirect()->route('inicio')->with('estado', 'No tienes permiso para acceder.');
        }
    }
}
