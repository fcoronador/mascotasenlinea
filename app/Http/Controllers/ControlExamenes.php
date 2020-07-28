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

    public function index()
    {
        $examenes = $this->modelo->indexexamenes()->getExamenes();
        return view('examenes.indexExamen', compact('examenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('examenes.crearExamen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Examenes $index)
    {
        $examen = [];
        $examen['idExam'] = $request->get('idExam');
        $examen['tipo'] = $request->get('tipo');
        $examen['resulta'] = $request->get('resulta');
        $examen['lab'] = $request->get('lab');
        $index->guardarexamenes($examen);

        return redirect()->route('indexexamen')->with('estado', 'El examen se ha creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $examen = $this->modelo->mostrarExamen($id);
        return view('examenes.showExamen', compact('examen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examen = $this->modelo->mostrarExamen($id);
        return view('examenes.editExamen', compact('examen', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $examen = [];
        $examen['idExam'] = $request->get('idExam');
        $examen['tipo'] = $request->get('tipo');
        $examen['resulta'] = $request->get('resulta');
        $examen['lab'] = $request->get('lab');

        $this->modelo->Actualizar($examen);
        return redirect()->route('indexexamen')->with('estado', 'El examen se ha actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examen['idExam']=$id;
        $examen['visible']= false;
        $this->modelo->borrar($examen);
        return redirect()->route('indexexamen')->with('estado', 'El examen se ha sido eliminado con exito');
    }
}
