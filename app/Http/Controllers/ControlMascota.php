<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Mascota;

class ControlMascota extends Controller
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Mascota();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = $this->modelo->indexmascotas()->getMascotas();
        return view('mascota.indexMascota', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = ControlCliente::listClientes();
        return view('mascota.crearMascota', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mascota $index)
    {
        $mascota = [];

        $mascota['numChip'] = $request->get('numChip');
        $mascota['nombre'] = $request->get('nombre');
        $mascota['especie'] = $request->get('especie');
        $mascota['sexo'] = $request->get('sexo');
        $mascota['raza'] = $request->get('raza');
        $mascota['fecNacimi'] = str_replace('-','/',$request->get('fecNacimi'));
        if($request->get('fecEsterili')){$mascota['fecEsterili'] = str_replace('-','/',$request->get('fecEsterili'));}
        else{$mascota['fecEsterili'] = $request->get('fecEsterili');}
        $mascota['cliente_idCedula'] = $request->get('idCedula');
        $mascota['visible'] = 1;
        //dd($mascota);
        $index->guardarmascotas($mascota);

        return redirect()->route('indexmascota')->with('estado', 'La mascota se ha creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mascota = $this->modelo->mostrarMascota($id);
        return view('mascota.showMascota', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mascota = $this->modelo->mostrarMascota($id);

        foreach($mascota as $item){
            $item->fecNacimi = str_replace('/','-',$item->fecNacimi);
            if($item->fecEsterili)
            {$item->fecEsterili = str_replace('/','-',$item->fecEsterili);}
        }
        return view('mascota.editMascota', compact('mascota', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $mascota = [];

        $mascota['numChip'] = $request->get('numChip');
        $mascota['nombre'] = $request->get('nombre');
        $mascota['especie'] = $request->get('especie');
        $mascota['sexo'] = $request->get('sexo');
        $mascota['raza'] = $request->get('raza');
        $mascota['fecNacimi'] = str_replace('-','/',$request->get('fecNacimi'));
        if($request->get('fecEsterili')){$mascota['fecEsterili'] = str_replace('-','/',$request->get('fecEsterili'));}
        else{$mascota['fecEsterili'] = $request->get('fecEsterili');}
        $mascota['cliente_idCedula'] = $request->get('idCedula');


        $this->modelo->Actualizar($mascota);
        return redirect()->route('indexmascota')->with('estado', 'La mascota se ha actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mascota['numChip'] = $id;
        $mascota['visible'] = false;
        $this->modelo->borrar($mascota);
        return redirect()->route('indexmascota')->with('estado', 'La mascota se ha sido eliminado con éxito');
    }
}
