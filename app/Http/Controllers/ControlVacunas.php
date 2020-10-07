<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Vacunas;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class ControlVacunas extends Controller
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Vacunas();
    }

    public static function listVacun()
    {
        $modelo= new Vacunas();
        $vacunas = $modelo->indexvacunas()->getVacunas();
        return $vacunas;
    }

    public static function cantVacunas()
    {
        $modelo= new Vacunas();
        $cantidad = $modelo->adminVacuna();
        return $cantidad;
    }

    public function historiaVacunas($id)
    {
        return $this->modelo->historiaVacuna($id);
    }


    public function index()
    {
        $vacunas=$this->modelo->indexvacunas()->getVacunas();
        return view('vacunas.indexVacuna', compact('vacunas'));
    }

    public function create()
    {
        return view('vacunas.crearVacuna');
    }

    public function store(Request $request, Vacunas $index)
    {
        request()->validate([
            'nombre'=>'required|alpha_dash|between:3,15',
            ],[
                'nombre.required'=>'Se necesita el nombre del medicamento.',
                'nombre.between'=>'La longitud del nombre debe estar entre 3-15 caracteres.',
            ]);

        $vacuna = [];
        $vacuna['idVacun'] = $request->get('idVacun');
        $vacuna['nombre'] = $request->get('nombre');

        $index->guardarvacuna($vacuna);
        return redirect()->route('indexvacuna')->with('estado', 'La vacuna se ha creado con exito');
    }

    public function show($id)
    {
        $vacuna = $this->modelo->mostrarvacuna($id);
        return view('vacunas.showVacuna', compact('vacuna'));
    }

     public function edit($id)
    {
        $vacuna = $this->modelo->mostrarvacuna($id);
        return view('vacunas.editVacuna', compact('vacuna', 'id'));
    }

    public function update(Request $request)
    {
        request()->validate([
            'nombre'=>'required|alpha_dash|between:3,15',
            ],[
                'nombre.required'=>'Se necesita el nombre del medicamento.',
                'nombre.between'=>'La longitud del nombre debe estar entre 3-15 caracteres.',
            ]);
            
        $vacuna = [];
        $vacuna['idVacun'] = $request->get('idVacun');
        $vacuna['nombre'] = $request->get('nombre');

        $this->modelo->Actualizar($vacuna);
        return redirect()->route('indexvacuna')->with('estado', 'La vacuna se ha actualizado con exito');
    }

    public function destroy($id)
    {
        $vacuna['idVacun']=$id;
        $vacuna['visible']= false;
        $this->modelo->borrar($vacuna);
        return redirect()->route('indexvacuna')->with('estado', 'La vacuna se ha eliminado con exito');
    }
}
