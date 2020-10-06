<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Examenes;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class ControlExamenes extends Controller
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Examenes();
    }

    public static function listExam()
    {
        $modelo= new Examenes();
        $examenes = $modelo->indexexamenes()->getExamenes();
        return $examenes;
    }

    public static function cantExamenes()
    {
        $modelo= new Examenes();
        $cantidad = $modelo->adminExamen();
        return $cantidad;
    }

    public function historiaExamen($id)
    {
        return $this->modelo->historiaExamen($id);
    }

    public function index()
    {
        $examenes = $this->modelo->indexexamenes()->getExamenes();
        return view('examenes.indexExamen', compact('examenes'));
    }

        public function create()
    {
        return view('examenes.crearExamen');
    }

    public function store(Request $request, Examenes $index)
    {
        request()->validate([
            'tipo'=>'required|alpha_dash|between:3,15',
            'resulta'=>'required|alpha_dash|between:3,39',
            'lab'=>'required|alpha_dash|between:3,39',
            ],[
                'tipo.required'=>'Se necesita el tipo de examen.',
                'tipo.between'=>'La longitud del tipo de examen debe estar entre 3-15 caracteres.',
                'resulta.required'=>'Se necesita el resultado del examen.',
                'resulta.between'=>'La longitud del resultado debe estar entre 3-39 caracteres.',
                'lab.required'=>'Se necesita el tipo de examen.',
                'lab.between'=>'La longitud del resultado debe estar entre 3-39 caracteres.',
            ]);

        $examen = [];
        $examen['idExam'] = $request->get('idExam');
        $examen['tipo'] = $request->get('tipo');
        $examen['resulta'] = $request->get('resulta');
        $examen['lab'] = $request->get('lab');
        
        $index->guardarexamenes($examen);
        return redirect()->route('indexexamen')->with('estado', 'El examen se ha creado con éxito');
    }

    public function show($id)
    {
        $examen = $this->modelo->mostrarExamen($id);
        return view('examenes.showExamen', compact('examen'));
    }

    public function edit($id)
    {
        $examen = $this->modelo->mostrarExamen($id);
        return view('examenes.editExamen', compact('examen', 'id'));
    }

    public function update(Request $request)
    {
        request()->validate([
            'tipo'=>'required|alpha_dash|between:3,15',
            'resulta'=>'required|alpha_dash|between:3,39',
            'lab'=>'required|alpha_dash|between:3,39',
            ],[
                'tipo.required'=>'Se necesita el tipo de examen.',
                'tipo.between'=>'La longitud del nombre debe estar entre 3-15 caracteres.',
                'resulta.required'=>'Se necesita el resultado del examen.',
                'resulta.between'=>'La longitud del resultado debe estar entre 3-39 caracteres.',
                'lab.required'=>'Se necesita el tipo de examen.',
                'lab.between'=>'La longitud del resultado debe estar entre 3-39 caracteres.',
            ]);

        $examen = [];
        $examen['idExam'] = $request->get('idExam');
        $examen['tipo'] = $request->get('tipo');
        $examen['resulta'] = $request->get('resulta');
        $examen['lab'] = $request->get('lab');

        $this->modelo->Actualizar($examen);
        return redirect()->route('indexexamen')->with('estado', 'El examen se ha actualizado con exito');
    }

    public function destroy($id)
    {
        $examen['idExam']=$id;
        $examen['visible']= false;
        $this->modelo->borrar($examen);
        return redirect()->route('indexexamen')->with('estado', 'El examen se ha sido eliminado con exito');
    }
}
