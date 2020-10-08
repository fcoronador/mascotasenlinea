<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Procedimiento;
use App\Http\Controllers\ControlMascota;
use App\Http\Controllers\ControlVacunas;
use App\Http\Controllers\ControlDesparacitacion;
use App\Http\Controllers\ControlVeterinarios;
use App\Http\Controllers\ControlExamenes;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class ControlProcedimiento extends Controller
{
    private $modelo;
    private $ControlMascota;
    private $ControlVacunas;
    private $ControlDesparacitacion;
    private $ControlVeterinarios;
    private $ControlExamenes;

    public function __construct(){
        $this->modelo = new Procedimiento();
        $this->ControlMascota = new ControlMascota();
        $this->ControlVacunas = new ControlVacunas();
        $this->ControlDesparacitacion = new ControlDesparacitacion();
        $this->ControlVeterinarios = new ControlVeterinarios();
        $this->ControlExamenes = new ControlExamenes();
    }

    public static function listProcedi()
    {
        $modelo= new Procedimiento();
        $$procedimiento = $modelo->indexprocedi()->getProcedi();
        return $$procedimiento;
    }

    public static function cantProcedi()
    {
        $modelo= new Procedimiento();
        $cantidad = $modelo->adminProcedi();
        return $cantidad;
    }

    public function index()
    {
        //$mascotas = $this->ControlMascota->index();
        $mascotas=ControlMascota::listMascotas();
        //$vacunas = $this->ControlVacunas->index();
        $vacunas=ControlVacunas::listVacun();
        //$desparas = $this->ControlDesparacitacion->index();
        $desparas=ControlDesparacitacion::listDespara();
        //$veterinario = $this->ControlVeterinarios->index();
        $veterinario=ControlVeterinarios::listaVeterinarios();
        //$examenes = $this->ControlExamenes->index();
        $examenes=ControlExamenes::listExam();
        $procedimiento = $this->modelo->indexprocedi()->getProcedi();
        return view('procedimientos.indexProcedi',compact('procedimiento','mascotas','vacunas','desparas','veterinario','examenes'));
    }

    public function create()
    {
        $mascotas=ControlMascota::listMascotas();
        $vacunas=ControlVacunas::listVacun();
        $desparas=ControlDesparacitacion::listDespara();
        $veterinario=ControlVeterinarios::listaVeterinarios();
        $examenes=ControlExamenes::listExam();
        return view('procedimientos.crearProcedi',compact('mascotas','vacunas','desparas','veterinario','examenes'));
    }

    public function store(Request $request, Procedimiento $index)
    {
        request()->validate([
            'idMascotas'=>'required',
            'idVacun'=>'required',
            'idDespara'=>'required',
            'idVeterin'=>'required',
            'idExam'=>'required',
        ],[
                'idMascotas.required'=>'Se necesita escoger una mascota',
                'idVacun.required'=>'Se necesita escoger una vacuna',
                'idDespara.required'=>'Se necesita escoger desparacitante.',
                'idVeterin.required'=>'Se necesita escoger veterinario.',
                'idExam.required'=>'Se necesita escoger examen',
        ]);

        $procedi=[];
        $procedi['fecha']= str_replace('-','/',$request->get('fecha'));
        if($request->get('sigDosis')){$procedi['sigDosis'] = str_replace('-','/',$request->get('sigDosis'));}
        else{$procedi['sigDosis'] = $request->get('sigDosis');}
        $procedi['mascota_idMascotas'] = $request->get('idMascotas');
        $procedi['vacunas_idVacun'] = $request->get('idVacun');
        $procedi['despara_idDespara'] = $request->get('idDespara');
        $procedi['veterin_idVeterin'] = $request->get('idVeterin');
        $procedi['examenes_idExam'] = $request->get('idExam');
        $procedi['visible'] = 1;
        $index->guardarprocedi($procedi);

        return redirect()->route('indexprocedi')->with('estado', 'Se ha creado con exito');
    }

    public function show($id)
    {
        $procedi=$this->modelo->mostrarProcedi($id);
        return view('procedimientos.showProcedi', compact('procedi'));
    }

    public function edit($id)
    {
        $procedi=$this->modelo->mostrarProcedi($id); 
        $mascotas=ControlMascota::listMascotas();
        $vacunas=ControlVacunas::listVacun();
        $desparas=ControlDesparacitacion::listDespara();
        $veterinario=ControlVeterinarios::listaVeterinarios();
        $examenes=ControlExamenes::listExam();
        return view('procedimientos.editProcedi',compact('procedi', 'id', 'mascotas','vacunas','desparas','veterinario','examenes'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'idMascotas'=>'required',
            'idVacun'=>'required',
            'idDespara'=>'required',
            'idVeterin'=>'required',
            'idExam'=>'required',
        ],[
                'idMascotas.required'=>'Se necesita escoger una mascota',
                'idVacun.required'=>'Se necesita escoger una vacuna',
                'idDespara.required'=>'Se necesita escoger desparacitante.',
                'idVeterin.required'=>'Se necesita escoger veterinario.',
                'idExam.required'=>'Se necesita escoger examen',
        ]);

        $procedi=[];
        $procedi['fecha']= str_replace('-','/',$request->get('fecha'));
        if($request->get('sigDosis')){$procedi['sigDosis'] = str_replace('-','/',$request->get('sigDosis'));}
        else{$procedi['sigDosis'] = $request->get('sigDosis');}
        $procedi['mascota_idMascotas'] = $request->get('idMascotas');
        $procedi['vacunas_idVacun'] = $request->get('idVacun');
        $procedi['despara_idDespara'] = $request->get('idDespara');
        $procedi['veterin_idVeterin'] = $request->get('idVeterin');
        $procedi['examenes_idExam'] = $request->get('idExam');
        $procedi['idProc'] = $id;
        
        $this->modelo->Actualizar($procedi);
        return redirect()->route('indexprocedi')->with('estado', 'Se ha actualizado con exito');
    }

    public function destroy($id)
    {
        $procedi['idProc']=$id;
        $procedi['visible']= false;
        $this->modelo->borrar($procedi);
        return redirect()->route('indexprocedi')->with('estado', 'Se ha sido eliminado con exito');
    }
}
