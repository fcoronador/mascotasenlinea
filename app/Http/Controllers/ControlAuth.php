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

  
    public function RegistroCliente(Request $request, Auth $index)
    {
        $persona = [];
    
        $existe = $index->verificarCorreo($request->get('correo'));
        if($existe){
            return redirect()->route('inicio')->with('alerta', 'El correo ya existe');
        }else{
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
}
