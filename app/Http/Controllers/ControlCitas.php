<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Citas;

class ControlCitas extends Controller
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new Citas();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = ControlServicios::listaServicios();
        $veterinario = ControlVeterinarios::listaVeterinarios();
        $clientes = ControlCliente::listClientes();
        $citas=$this->modelo->indexcitas()->getCitas();
        //dd($clientes);
        return view('citas.indexcitas',compact('citas','servicios','veterinario','clientes'));
        

        
    }


    public static function cantCitas(){
        $modelo= new Citas();
        $citas = $modelo->adminCitas();
        return $citas;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = ControlServicios::listaServicios();
        $veterinario = ControlVeterinarios::listaVeterinarios();
        $clientes = ControlCliente::listClientes();
        return view('citas.crearCita', compact('servicios','veterinario','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Citas $index)
    {

        $Citas = [];

        $Citas['fecha'] = str_replace('-','/',$request->get('fecha'));
        $Citas['hora'] = $request->get('hora');
        $Citas['motivo'] = $request->get('motivo');
        $Citas['servicios_idServi'] = $request->get('idServi');
        $Citas['cliente_idCedula'] = $request->get('cc');
        $Citas['visible'] = 1;
        $Citas['veterin_idVeterin'] = $request->get('idVeterin');
/*         dd($Citas);
 */        
        $index->guardarcita($Citas);

        if(session('rol')===3){
            return redirect()->route('usuario')->with('estado', 'La cita se ha creado con éxito.');
        }else if (session('rol')===2 || session('rol')===1)
        {
            return redirect()->route('indexcliente')->with('estado', 'La cita se ha creado con éxito.');
        }
    }

    public function store2(Request $request, Citas $index)
    {

        $Citas = [];
        $Citas['cliente_idCedula']=$request->get('cliente_idCedula');
        $Citas['fecha'] = str_replace('-','/',$request->get('fecha'));
        $Citas['hora'] = $request->get('hora');
        $Citas['motivo'] = $request->get('motivo');
        $Citas['servicios_idServi'] = $request->get('idServi');
        $Citas['visible'] = 1;
        $Citas['veterin_idVeterin'] = $request->get('idVeterin');
/*         dd($Citas);
 */        
        $index->guardarcita2($Citas);


        return redirect()->route('indexcitas')->with('estado', 'La cita se ha creado con éxito');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicios = ControlServicios::listaServicios();
        $veterinario = ControlVeterinarios::listaVeterinarios();
        //dd($veterinario);
        $citas = $this->modelo->mostrarcita($id);
        $cc=$id;
        return view('citas.citas', compact('citas','servicios','cc','veterinario')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idCita)
    {
        $servicios = ControlServicios::listaServicios();
        $idCita = $this->modelo->mostrarEditCita($idCita);
        $veterinario = ControlVeterinarios::listaVeterinarios();
        return view('citas.editcita', compact('idCita','servicios','veterinario'));
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
        $Citas = [];
        $Citas['fecha'] = str_replace('-','/',$request->get('fecha'));
        $Citas['hora'] = $request->get('hora');
        $Citas['motivo'] = $request->get('motivo');
        $Citas['servicios_idServi'] = $request->get('idServi');
        $Citas['idCitas'] = $id;
        $Citas['visible'] = 1;
        $Citas['veterin_idVeterin'] = $request->get('idVeterin');
/*         dd($Citas);
 */        
        $this->modelo->Actualizar($Citas);


        return redirect()->route('indexcitas')->with('estado', 'La cita se ha actualizado con éxito');
    }

  
    public function destroy($idCita)
    {
        $Citas['idCitas']=$idCita;
        $Citas['visible']= false;
        $this->modelo->borrar($Citas);
        return redirect()->route('indexcitas')->with('estado', 'La cita se ha sido eliminado con exito');
    }
}
