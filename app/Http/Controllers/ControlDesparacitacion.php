<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Desparacitacion;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class ControlDesparacitacion extends Controller
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Desparacitacion();
    }

    public static function listDespara()
    {
        $modelo= new Desparacitacion();
        $desparas = $modelo->indexdesparas()->getDesparas();
        return $desparas;
    }

    public static function cantDespara()
    {
        $modelo= new Desparacitacion();
        $cantidad = $modelo->adminDespara();
        return $cantidad;
    }

    public function HistoriaDespara($id)
    {
        return $this->modelo->historiaDespara($id);
    }

    public function index()
    {
        $desparas=$this->modelo->indexdesparas()->getDesparas();
        return view('desparacitacion.indexDesparacitacion', compact('desparas'));
    }

    public function create()
    {
        return view('desparacitacion.crearDesparacitacion');
    }

    public function store(Request $request, Desparacitacion $index)
    {
        request()->validate([
            'nombre'=>'required|alpha_dash|between:3,15',
            ],[
                'nombre.required'=>'Se necesita el nombre del medicamento.',
                'nombre.between'=>'La longitud del nombre debe estar entre 3-15 caracteres.',
            ]);

        $despara = [];
        $despara['idDespara'] = $request->get('idDespara');
        $despara['nombre'] = $request->get('nombre');

        $index->guardardesparaci($despara);
        return redirect()->route('indexdespara')->with('estado', 'La desparacitación se ha creado con exito');
    }

    public function show($id)
    {
        $despara = $this->modelo->mostrardespara($id);
        return view('desparacitacion.showDesparacitacion', compact('despara'));
    }

     public function edit($id)
    {
        $despara = $this->modelo->mostrardespara($id);
        return view('desparacitacion.editDesparacitacion', compact('despara', 'id'));
    }

    public function update(Request $request)
    {
        request()->validate([
            'nombre'=>'required|alpha_dash|between:3,15',
            ],[
                'nombre.required'=>'Se necesita el nombre del medicamento.',
                'nombre.between'=>'La longitud del nombre debe estar entre 3-15 caracteres.',
            ]);

        $despara = [];
        $despara['idDespara'] = $request->get('idDespara');
        $despara['nombre'] = $request->get('nombre');

        $this->modelo->Actualizar($despara);
        return redirect()->route('indexdespara')->with('estado', 'La desparacitación se ha actualizado con exito');
    }

    public function destroy($id)
    {
        $despara['idDespara']=$id;
        $despara['visible']= false;
        $this->modelo->borrar($despara);
        return redirect()->route('indexdespara')->with('estado', 'La desparacitación ha sido eliminada con exito');
    }
}
