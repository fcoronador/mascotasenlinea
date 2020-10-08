<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControlMascota;
use App\Http\Controllers\ControlCliente;
use App\Modelo\Citas;

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
            return redirect()->route('inicio');
        }
    }

    public function crearCitas($id)
    {
        
        if($id == session('idCedula'))
        {
            $modelo= new Citas();
            $servicios = ControlServicios::listaServicios();
            $veterinario = ControlVeterinarios::listaVeterinarios();
            //dd($veterinario);
            $citas = $modelo->mostrarcita($id);
            $cc=$id;
            return view('cliente.citas', compact('citas','servicios','cc','veterinario')); 
            
    
        }else{
            return redirect()->route('inicio');
        }
    }

    public function perfil($id)
    {
        if($id == session('idCedula'))
        {
            return $this->clientes->show($id);
        }else{
            return redirect()->route('inicio');
        }
    }

    public function CrearMascota($id)
    {
        if($id == session('idCedula'))
        {
            return $this->mascotas->create();
        }else{
            return redirect()->route('inicio');
        }
    }

    public function EditarMascota($id)
    {
        $mascota = $this->mascotas->HistoriaClinica($id);
        $ID='';
        foreach($mascota as $item)
        {
            $ID= $item->ID;
        }

        if($ID === session('idCedula'))
        {
            return view('cliente.MascotaDetalles',compact('mascota','id'));
        }else{
            return redirect()->route('inicio');
        }

    }

    public function BorrarMascota($id)
    {
        $mascota = $this->mascotas->HistoriaClinica($id);
        $ID='';
        foreach($mascota as $item)
        {
            $ID= $item->ID;
        }

        if($ID === session('idCedula'))
        {
            $this->mascotas->destroy($id);
            return redirect()->route('usuario');
        }else{
            return redirect()->route('inicio');
        }

    }



}
