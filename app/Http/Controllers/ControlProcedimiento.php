<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Procedimiento;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class ControlProcedimiento extends Controller
{
    private $modelo;

    public function __construct(){
        $this->modelo = new Procedimiento();
    }

    public function index()
    {
        $procedimiento = $this->modelo->indexprocedi()->getProcedi();
        return view('procedimientos.indexProcedi',compact('procedimiento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('procedimientos.crearProcedi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Procedimiento $index)
    {
        $procedi=[];
        $procedi['idProc']=$request->get('idProc');
        $procedi['fecha']=$request->get('fecha');
        $procedi['sigDosis']=$request->get('sigDosis');
        $index->guardarprocedi($procedi);

        return redirect()->route('indexprocedi')->with('estado', 'Se ha creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $procedi=$this->modelo->mostrarProcedi($id);
        return view('procedimientos.showProcedi',compact('procedi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedi=$this->modelo->mostrarProcedi($id);
        return view('procedimientos.editProcedi',compact('procedi','id'));
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
        $procedi=[];
        $procedi['idProc']=$request->get('idProc');
        $procedi['fecha']=$request->get('fecha');
        $procedi['sigDosis']=$request->get('sigDosis');
        
        $this->modelo->Actualizar($procedi);
        return redirect()->route('indexprocedi')->with('estado', 'Se ha actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $procedi['idProc']=$id;
        $procedi['visible']= false;
        $this->modelo->borrar($procedi);
        return redirect()->route('indexprocedi')->with('estado', 'Se ha sido eliminado con exito');
    }
}
