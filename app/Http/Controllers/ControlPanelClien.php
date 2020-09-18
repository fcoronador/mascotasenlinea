<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlMascota;
use App\Http\Controllers\ControlCliente;
class ControlPanelClien extends Controller
{
    private $mascotas;
    private $clientes;

    public function __construct()
    {
        $this->mascotas= new ControlMascota();
        $this->clientes = new ControlCliente();
    }
    

    public function index()
    {
        if(session('rol') == 3){
                $misMascotas=$this->mascotas->mascotasPorCliente(session('idCedula'));
                
                return view('cliente.panel', compact('misMascotas'));
            }else{
                
                return redirect()->route('inicio')->with('estado', 'No tienes permiso para acceder.');
            }
    }

    public function editUser($id)
    {
        if($id == session('idCedula'))
        {
            return $this->clientes->editForUser($id);
        }else{
            return redirect()->back();
        }
    }

    public function perfil($id)
    {
        if($id == session('idCedula'))
        {
            return $this->clientes->show($id);
        }else{
            return redirect()->back();
        }
    }




}
