<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Procedimiento;
use App\Http\Controllers\ControlMascota;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class ControlProcedimiento extends Controller
{
    private $modelo;
    private $ControlMascota;

    public function __construct(){
        $this->modelo = new Procedimiento();
        $this->ControlMascota = new ControlMascota();
    }

    public function index()
    {
        $mascotas = $this->ControlMascota->index();
        $procedimiento = $this->modelo->indexprocedi()->getProcedi();
        return view('procedimientos.indexProcedi',compact('procedimiento','mascotas'));
    }

    public function create()
    {
        return view('procedimientos.crearProcedi');
    }

    public function store(Request $request, Procedimiento $index)
    {
        $procedi=[];
        $procedi['fecha']= str_replace('-','/',$request->get('fecha'));
        $procedi['sigDosis']=$request->get('sigDosis');
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
        return view('procedimientos.editProcedi',compact('procedi','id'));
    }

    public function update(Request $request, $id)
    {
        $procedi=[];
        $procedi['fecha']= str_replace('-','/',$request->get('fecha'));
        $procedi['sigDosis']=$request->get('sigDosis');
        $procedi['mascota_idMascotas'] = $request->get('idMascotas');
        $procedi['vacunas_idVacun'] = $request->get('idVacun');
        $procedi['despara_idDespara'] = $request->get('idDespara');
        $procedi['veterin_idVeterin'] = $request->get('idVeterin');
        $procedi['examenes_idExam'] = $request->get('idExam');
        $procedi['idProc'] = $id;
        $procedi['visible'] = 1;
        
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
