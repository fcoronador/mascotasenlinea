<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Cliente;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class ControlCliente extends Controller
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Cliente();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function listClientes(){
        $modelo= new Cliente();
        $clientes = $modelo->indexclientes()->getClientes();
        return $clientes;
    }


    public function index()
    {
        $clientes = $this->modelo->indexclientes()->getClientes();
        return view('admin.indexCliente', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.crearCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cliente $index)
    {
        $cliente = [];

        $cliente['idCedula'] = $request->get('idCedula');
        $cliente['nombre'] = $request->get('nombre');
        $cliente['apellido'] = $request->get('apellido');
        $cliente['telefono'] = $request->get('telefono');
        $cliente['direccion'] = $request->get('direccion');
        $cliente['correo'] = $request->get('correo');
        $cliente['contrasena'] = $request->get('contrasena');

        $index->guardarclientes($cliente);

        return redirect()->route('indexcliente')->with('estado', 'El cliente se ha creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = $this->modelo->mostrarCliente($id);
        return view('admin.showCliente', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cliente = $this->modelo->mostrarCliente($id);
        return view('admin.editCliente', compact('cliente', 'id'));
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

        $cliente = [];
        $cliente['idCedula'] = $request->get('idCedula');
        $cliente['nombre'] = $request->get('nombre');
        $cliente['apellido'] = $request->get('apellido');
        $cliente['telefono'] = $request->get('telefono');
        $cliente['direccion'] = $request->get('direccion');
        $cliente['correo'] = $request->get('correo');
        $cliente['contrasena'] = $request->get('contrasena');


        $this->modelo->Actualizar($cliente);
        return redirect()->route('indexcliente')->with('estado', 'El cliente se ha actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente['idCedula']=$id;
        $cliente['visible']= false;
        $this->modelo->borrar($cliente);
        return redirect()->route('indexcliente')->with('estado', 'El cliente se ha sido eliminado con exito');
    }
}
