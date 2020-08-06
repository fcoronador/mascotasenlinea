<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Auth;

class ControlAuth extends Controller
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Auth();
    }



    public function storeRegistro(Request $request, Auth $index)
    {
        $registro = [];
        $registro['perNombre'] = $request->get('nombre');
        $registro['perApellido'] = $request->get('apellido');
        $registro['perDocumento'] = $request->get('documento');
        $registro['perUsuSesion'] = $request->get('correo');
        $registro['perEstado'] = true;

        $this->modelo->guardarclientes($cliente);
        return redirect()->route('inicio')->with('estado', 'Se ha registrado con éxito');
    }
}
