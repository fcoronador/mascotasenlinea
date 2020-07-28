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

    public static function listDespara(){
        $modelo= new Desparacitacion();
        $desparas = $modelo->indexdesparas()->getDesparas();
        return $desparas;
    }

    public function index()
    {
        $desparas=$this->modelo->indexdesparas()->getDesparas();
        return view('desparacitacion.indexDesparacitacion', compact('desparas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('desparacitacion.crearDesparacitacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Desparacitacion $index)
    {
        $despara = [];
        $despara['idDespara'] = $request->get('idDespara');
        $despara['nombre'] = $request->get('nombre');

        $index->guardardesparaci($despara);

        return redirect()->route('indexdespara')->with('estado', 'La desparacitación se ha creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $despara = $this->modelo->mostrardespara($id);
        return view('desparacitacion.showDesparacitacion', compact('despara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $despara = $this->modelo->mostrardespara($id);
        return view('desparacitacion.editDesparacitacion', compact('despara', 'id'));
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
        $despara = [];
        $despara['idDespara'] = $request->get('idDespara');
        $despara['nombre'] = $request->get('nombre');

        $this->modelo->Actualizar($despara);
        return redirect()->route('indexdespara')->with('estado', 'La desparacitación se ha actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $despara['idDespara']=$id;
        $despara['visible']= false;
        $this->modelo->borrar($despara);
        return redirect()->route('indexdespara')->with('estado', 'La desparacitación se ha sido eliminado con exito');
    }
}
