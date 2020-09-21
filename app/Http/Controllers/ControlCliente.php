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

  
    public static function listClientes(){
        $modelo= new Cliente();
        $clientes = $modelo->indexclientes()->getClientes();
        return $clientes;
    }
    public static function cantClientes(){
        $modelo= new Cliente();
        $cantidad = $modelo->adminCliente();
        return $cantidad;
    }

    public function clientCorreo($cliente)
    {
        return $this->modelo->cliente($cliente);
    }

    public function registrar($cliente)
    {
        $this->modelo->regist($cliente);
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
        
        request()->validate([
        'idCedula'=>'required|digits_between:5,20',
        'nombre'=>'required|alpha_dash|between:3,39',
        'apellido'=>'required|alpha_dash|between:3,39',
        'telefono'=>'required|digits_between:7,14',
        'direccion'=>'required|alpha_dash|alpha_num|max:74',
        'correo'=>'required|email',
        'contrasena'=>'required'
        ],[
            'idCedula.required'=>'Se necesita el número de identificación.',
            'idCedula.digits_between'=>'La longitud del número de identificación debe estar entre 5-20 caracteres.',
            'nombre.required'=>'Se necesita el nombre del cliente.',
            'nombre.between'=>'La longitud del nombre debe estar entre 3-39 caracteres.',
            'apellido.required'=>'Se necesita el nombre del cliente.',
            'apellido.between'=>'La longitud del nombre debe estar entre 3-39 caracteres.',
            'telefono.required'=>'Se necesita el número de teléfono.',
            'telefono.digits_between'=>'La longitud del número de teléfono debe estar 7-14 dígitos.',
            'direccion.required'=>'Se necesita la dirección del cliente',
            'direccion.max'=>'La longitud máxima debe ser de 74 dígitos',
            'correo.required'=>'Se necesita el correo del cliente.',
            'correo.email'=>'Se  necesita un email valido.',
            'contrasena.required'=>'Se necesita la contraseña'
        ]);
        
        
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
       

        if(session('rol')=== 3 )
        {
            return view('cliente.perfil', compact('cliente'));
        }else if(session('rol')===1 || session('rol')===2){
            return view('admin.showCliente', compact('cliente'));
        }

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

    public function editForUser($id)
    {
        $cliente = $this->modelo->mostrarCliente($id);
        return view('cliente.actualizar', compact('cliente', 'id'));
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

        request()->validate([
            'idCedula'=>'required|digits_between:5,20',
            'nombre'=>'required|alpha_dash|between:3,39',
            'apellido'=>'required|alpha_dash|between:3,39',
            'telefono'=>'required|digits_between:7,14',
            'direccion'=>'required|alpha_num|max:74',
            'correo'=>'required|email',
            'contrasena'=>'required'
            ],[
                'idCedula.required'=>'Se necesita el número de identificación.',
                'idCedula.digits_between'=>'La longitud del número de identificación debe estar entre 5-20 caracteres.',
                'nombre.required'=>'Se necesita el nombre del cliente.',
                'nombre.between'=>'La longitud del nombre debe estar entre 3-39 caracteres.',
                'apellido.required'=>'Se necesita el nombre del cliente.',
                'apellido.between'=>'La longitud del nombre debe estar entre 3-39 caracteres.',
                'telefono.required'=>'Se necesita el número de teléfono.',
                'telefono.digits_between'=>'La longitud del número de teléfono debe estar 7-14 dígitos.',
                'direccion.required'=>'Se necesita la dirección del cliente',
                'direccion.max'=>'La longitud máxima debe ser de 74 dígitos',
                'correo.required'=>'Se necesita el correo del cliente.',
                'correo.email'=>'Se  necesita un email valido.',
                'contrasena.required'=>'Se necesita la contraseña'
            ]);
            
        $cliente = [];
        $cliente['idCedula'] = $request->get('idCedula');
        $cliente['nombre'] = $request->get('nombre');
        $cliente['apellido'] = $request->get('apellido');
        $cliente['telefono'] = $request->get('telefono');
        $cliente['direccion'] = $request->get('direccion');
        $cliente['correo'] = $request->get('correo');
        $cliente['contrasena'] = $request->get('contrasena');

        $this->modelo->Actualizar($cliente);
        if(session('rol')=== 3 )
        {
            return redirect()->route('usuario')->with('estado', 'El cliente se ha actualizado con éxito');
        }else if(session('rol')===1 || session('rol')===2){
            return redirect()->route('indexcliente')->with('estado', 'El cliente se ha actualizado con éxito');
        }
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
