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
        return view('mascota.crearMascota');
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

        $mascota['idCedula'] = $request->get('idCedula');
        $mascota['nombre'] = $request->get('nombre');
        $mascota['apellido'] = $request->get('apellido');
        $mascota['telefono'] = $request->get('telefono');
        $mascota['direccion'] = $request->get('direccion');
        $mascota['correo'] = $request->get('correo');
        $mascota['contrasena'] = $request->get('contrasena');

        $index->guardarmascotas($mascota);

        return redirect()->route('indexmascota')->with('estado', 'La mascota se ha creado con éxito');
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
        $mascota['idCedula'] = $request->get('idCedula');
        $mascota['nombre'] = $request->get('nombre');
        $mascota['apellido'] = $request->get('apellido');
        $mascota['telefono'] = $request->get('telefono');
        $mascota['direccion'] = $request->get('direccion');
        $mascota['correo'] = $request->get('correo');
        $mascota['contrasena'] = $request->get('contrasena');


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
        $mascota['idCedula']=$id;
        $mascota['visible']= false;
        $this->modelo->borrar($mascota);
        return redirect()->route('indexmascota')->with('estado', 'La mascota se ha sido eliminado con éxito');
    }
}
