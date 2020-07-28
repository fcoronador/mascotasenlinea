<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Citas;

class ControlCitas extends Controller
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new Citas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index= new Citas();
        $citas=$index->indexcitas()->getCitas();
        return view('citas.citas',compact('citas'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('citas.crearcita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Citas $index)
    {

        $Citas = [];

        $Citas['fecha'] = str_replace('-','/',$request->get('fecha'));
        $Citas['hora'] = $request->get('hora');
        $Citas['motivo'] = $request->get('motivo');
        $Citas['servicios_idServi'] = $request->get('idServi');
        $Citas['cliente_idCedula'] = $request->get('cc');
        $Citas['visible'] = 1;
/*         dd($Citas);
 */        
        $index->guardarcita($Citas);


        return redirect()->route('indexcliente')->with('estado', 'La cita se ha creado con éxito');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicios = ControlServicios::listaServicios();
        $citas = $this->modelo->mostrarcita($id);
        $cc=$id;
        return view('citas.citas', compact('citas','servicios','cc')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citas = $this->modelo->mostrarcita($id);
        return view('citas.editcita', compact('citas', 'id'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
