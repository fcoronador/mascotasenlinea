<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Servicios;

class ControlServicios extends Controller
{


    private $modelo;

    public function __construct(){
        $this->modelo = new Servicios();
    }

    public function index()
    {        
        $index= new Servicios();
        $servicios=$index->indexservicios()->getServicios();
        return view('servicios.indexServicios',compact('servicios'));
    }


    public static function listaServicios()
    {        
        $index= new Servicios();
        $servicios=$index->indexservicios()->getServicios();
        return $servicios;
    }

 

    public function create()
    {
        return view('servicios.crearservicio');
    }


  
    public function store(Request $request, Servicios $index)
    {
        $servicio = [];
        $servicio['servicio'] = $request->get('servicio');
        $servicio['veterin_idVeterin'] = 1;
        $servicio['visible'] = 1;
        //dd($servicio);

        $index->guardarservicio($servicio);
        return redirect()->route('servicios')->with('estado', 'El servicio se ha creado con exito');
    }

    public function edit($id)
    {
        $servicio = $this->modelo->mostrarservicio($id);
        return view('servicios.editServicio', compact('servicio', 'id'));
    }


    public function update(Request $request)
    {
        $servicio = [];
        $servicio['idServi'] = $request->get('idServi');
        $servicio['servicios'] = $request->get('servicios');

        $this->modelo->Actualizar($servicio);
        return redirect()->route('servicios')->with('estado', 'El servicio se ha actualizado con exito');
    }

    public function destroy($id)
    {
        $servicio['idServi']=$id;
        $servicio['visible']= false;
        $this->modelo->borrar($servicio);
        return redirect()->route('servicios')->with('estado', 'El servicio se ha eliminado con exito');
    }
}
