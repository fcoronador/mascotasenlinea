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
        $this->exa = new ControlExamenes();
    }

    public function index($id)
    {

        if (session('rol') == 1 || session('rol') == 2 || session('rol') == 3) {

            $historia = $this->mascota->HistoriaClinica($id);
            $ID = '';
            foreach ($historia as $item) {
                $ID = $item->ID;
            }

            $controles = $this->control->controlHistoria($id);
            $vacuna = $this->vacunas->historiaVacunas($id);
            $desparaci = $this->despara->HistoriaDespara($id);
            $examen = $this->exa->historiaExamen($id);

            foreach ($historia as $item) {
                $item->edad = $this->ago(date_create($item->fecNacimi));
            }
            foreach ($vacuna as $item) {
                $item->anti = $this->ago(date_create($item->Fecha));
            }
            foreach ($desparaci as $item) {
                $item->anti = $this->ago(date_create($item->Fecha));
            }
            foreach ($examen as $item) {
                $item->anti = $this->ago(date_create($item->Fecha));
            }

            $pesos = [];
            $fechas = [];

            foreach ($controles as $item) {
                array_push($pesos, $item->Peso);
                array_push($fechas, date_create($item->Fecha)->format('Y-m-d'));
            }


            if ($ID === session('idCedula')) {
                return view('historia.historia', compact('pesos', 'fechas', 'historia', 'controles', 'vacuna', 'desparaci', 'examen'));
            } else { return redirect()->back();}
            
        } else {

            return redirect()->route('inicio')->with('estado', 'No tienes permiso para acceder.');
        }
    }

    public function pluralize($count, $text)
    {
        if ($text == 'mes') {
            return $count . (($count == 1) ? (" $text") : (" ${text}es"));
        } else {
            return $count . (($count == 1) ? (" $text") : (" ${text}s"));
        }
    }

    public function ago($datetime)
    {
        $interval = date_create('now')->diff($datetime);
        $suffix = ($interval->invert ? '' : '');
        if ($v = $interval->y >= 1) return $suffix . $this->pluralize($interval->y, 'año');
        if ($v = $interval->m >= 1) return $suffix . $this->pluralize($interval->m, 'mes');
        if ($v = $interval->d >= 1) return $suffix . $this->pluralize($interval->d, 'dia');
        if ($v = $interval->h >= 1) return $suffix . $this->pluralize($interval->h, 'hora');
        if ($v = $interval->i >= 1) return $suffix . $this->pluralize($interval->i, 'minuto');
        return $suffix . $this->pluralize($interval->s, 'segundo');
    }
}
