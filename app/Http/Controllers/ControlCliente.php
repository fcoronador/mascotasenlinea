<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Cliente;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class ControlCliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index= new Cliente();
        $clientes=$index->indexclientes()->getClientes();
        return view('admin.indexCliente',compact('clientes'));
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
       $cliente=[];

       $cliente['idCedula']=$request->get('idCedula');
       $cliente['nombre']=$request->get('nombre');
       $cliente['apellido']=$request->get('apellido');
       $cliente['telefono']=$request->get('telefono');
       $cliente['direccion']=$request->get('direccion');
       $cliente['correo']=$request->get('correo');
       $cliente['contrasena']=$request->get('contrasena');

        $index->guardarclientes($cliente);

       return redirect()->route('indexcliente')->with('estado', 'El cliente se ha creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $index= new Cliente();
        $cliente=$index->mostrarCliente($id);
        return view('admin.showCliente',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
