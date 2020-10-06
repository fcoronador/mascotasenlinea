<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Veterinarios;

class ControlVeterinarios extends Controller
{


    private $modelo;

    public function __construct(){
        $this->modelo = new Veterinarios();
    }

    public function index()
    {        
        $index= new Veterinarios();
        $veterinario=$index->indexveterinarios()->getVeterinario();
        return view('vet.indexVeterinarios',compact('veterinario'));
    }

    public static function cantVet(){
        $modelo= new Veterinarios();
        $veterinario = $modelo->adminVet();
        return $veterinario;
    }

    public static function listaVeterinarios()
    {        
        $index= new Veterinarios();
        $veterinario=$index->indexveterinarios()->getVeterinario();
        return $veterinario;
    }

 

    public function create()
    {
        return view('vet.crearVeterinario');
    }


  
    public function store(Request $request, Veterinarios $index)
    {
        //rol, cargo,nombre,visible
        $veterinario = [];
        $veterinario['rol'] = 2;
        $veterinario['cargo'] = 'Veterinario';
        $veterinario['nombre'] = $request->get('nombre');
        
        $veterinario['visible'] = 1;
        //dd($servicio);

        $index->guardarveterinario($veterinario);
        return redirect()->route('indexveterinarios')->with('estado', 'El veterinario se ha creado con exito');
    }

    public function edit($id)
    {
        $veterinario = $this->modelo->mostrarveterinario($id);
        return view('vet.editVeterinario', compact('veterinario', 'id'));
    }


    public function update(Request $request)
    {
        $veterinario = [];
        $veterinario['idVeterin'] = $request->get('idVeterin');
        $veterinario['nombre'] = $request->get('nombre');

        $this->modelo->Actualizar($veterinario);
        return redirect()->route('indexveterinarios')->with('estado', 'El veterinario se ha actualizado con exito');
    }

    public function destroy($id)
    {
        $veterinario['idVeterin']=$id;
        $veterinario['visible']= false;
        $this->modelo->borrar($veterinario);
        return redirect()->route('indexveterinarios')->with('estado', 'El veterinario se ha eliminado con exito');
    }
}
