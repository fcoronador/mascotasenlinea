<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Auth;
use App\Modelo\Cliente;
//use App\Http\Controllers\ControlCliente;

class ControlAuth extends Controller
{
    private $modelo;
    private $ModeloCli;

    public function __construct()
    {
        $this->modelo = new Auth();
        $this->ModeloCli = new Cliente();
    }


    public function RegistroCliente(Request $request, Auth $index)
    {
        $persona = [];

        $existe = $index->verificarCorreo($request->get('correo'));
        if ($existe) {
            return redirect()->route('inicio')->with('alerta', 'El correo ya existe');
        } else {
            $persona['usuLogin'] = $request->get('correo');
        }

        if ($request->get('password') === $request->get('confirmar')) {
            $persona['usuPassword'] = password_hash($request->get('password'), PASSWORD_BCRYPT);
        } else {
            return redirect()->route('inicio')->with('alerta', 'Las contraseñas no coinciden');
        }
        $persona['usuUsuSesion'] = $request->get('correo');
        $persona['usuEstado'] = true;

        $index->guardarCliente($persona);

        return redirect()->route('inicio')->with('estado', 'Se ha registrado con éxito');
    }

    public function Login(Request $request)
    {
        $existe = $this->modelo->verificarCorreo($request->get('correo'));
        if (!$existe) {
            return redirect()->route('inicio')->with('alerta', 'El usuario no existe.');
        }
        $usuario = $this->consultarUsuario($request->get('correo'));
        
        foreach ($usuario as $item) {

            if (password_verify($request->get('password'), $item->password)) {
                
                $cliente = $this->ModeloCli->cliente($request->get('correo'));

                if ($item->rol == 1) {

                    session(['rol'=> 1]);
                    foreach($cliente as $prop)
                    {
                        session(['idCedula'=> $prop->idCedula]);
                        session(['nombre'=> $prop->nombre]);
                        session(['apellido'=> $prop->apellido]);
                        session(['correo'=> $prop->correo]);
                    }
                    
                    //$temp = new ControlCliente();
                   //return $temp->show(session('idCedula'));

                    return redirect()->route('administracion');

                } elseif ($item->rol == 2) {

                    session(['rol'=> 2]);
                    foreach($cliente as $prop)
                    {
                        session(['idCedula'=> $prop->idCedula]);
                        session(['nombre'=> $prop->nombre]);
                        session(['apellido'=> $prop->apellido]);
                        session(['correo'=> $prop->correo]);
                    }
                    return redirect()->route('veterinario');

                } elseif ($item->rol == 3) {

                    session(['rol'=> 3]);
                    foreach($cliente as $prop)
                    {
                        session(['idCedula'=> $prop->idCedula]);
                        session(['nombre'=> $prop->nombre]);
                        session(['apellido'=> $prop->apellido]);
                        session(['correo'=> $prop->correo]);
                    }
                    return redirect()->route('inicio');
                }
            }
            else{
                return redirect()->route('inicio')->with('alerta', 'Contraseña incorrecta.');
            }
        }
    }

    public function Logout(){
        session()->forget('rol');
        session()->forget('idCedula');
        session()->forget('nombre');
        session()->forget('apellido');
        session()->forget('correo');
        return redirect()->back()->with('estado', 'Ha salido con éxito');
    }

    public function consultarUsuario($correo)
    {
        return $usuario = $this->modelo->obtenerUsuario($correo);
    }
}
