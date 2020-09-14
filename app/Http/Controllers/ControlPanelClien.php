<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlMascota;
class ControlPanelClien extends Controller
{
    private $mascotas;
    public function __construct()
    {
        $this->mascotas= new ControlMascota;
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





}
