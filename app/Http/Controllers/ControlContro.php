<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Modelo\Control;
use Illuminate\Support\Facades\DB;


class ControlContro extends Controller
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Control();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controles=$this->modelo->indexcontroles()->getControl();
        return view('control.indexControl',compact('controles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mascotas = ControlMascota::listMascotas();
        $veterin = DB::select('SELECT * FROM veterin'); /* Temporalmente mientras se crea CRUD Veterinarios */
        return view('control.crearControl', compact('veterin','mascotas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Control $index)
    {
        $control = [];

        $control['veterin_idVeterin'] = $request->get('idVeterin');
        $control['mascota_idMascotas'] = $request->get('idMascota');
        $control['fecha'] = str_replace('-','/',$request->get('fecha'));
        $control['peso'] = $request->get('peso');
        $control['diagnos'] = $request->get('diagnos');
        $control['trata'] = $request->get('trata');
        $control['observ'] = $request->get('observ');
        
        

        $index->guardarcontroles($control);

        return redirect()->route('indexcontrol')->with('estado', 'El control se ha creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $control = $this->modelo->mostrarControl($id);
        return view('control.showControl', compact('control'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $control = $this->modelo->mostrarControl($id);
        foreach($control as $item){
            $item->Fecha = str_replace('/','-',$item->Fecha);           
        }
        $mascotas = ControlMascota::listMascotas();
        $veterin = DB::select('SELECT * FROM veterin'); 
        return view('control.editControl', compact('control', 'id', 'mascotas', 'veterin'));
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
        $control = [];

        $control['veterin_idVeterin'] = $request->get('idVeterin');
        $control['mascota_idMascotas'] = $request->get('idMascota');
        $control['fecha'] = str_replace('-','/',$request->get('fecha'));
        $control['peso'] = $request->get('peso');
        $control['diagnos'] = $request->get('diagnos');
        $control['trata'] = $request->get('trata');
        $control['observ'] = $request->get('observ');
        $control['idControl'] = $id;

        //dd($control);
        $this->modelo->Actualizar($control);

        return redirect()->route('indexcontrol')->with('estado', 'El control se ha editado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $control['idControl'] = $id;
        $control['visible'] = false;
        $this->modelo->borrar($control);
        return redirect()->route('indexcontrol')->with('estado', 'El control se ha sido eliminado con éxito');
    }
}
