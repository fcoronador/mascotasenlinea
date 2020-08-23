<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlPanelAdmin extends Controller
{




    public function index()
    {
        if(session('rol') == 1){

        $clientes = ControlCliente::cantClientes();
        $mascotas = ControlMascota::cantMascotas();
        $control = ControlContro::cantControl();

        $cantidadCli = $this->etiquetas($clientes);
        $cantidadMasco = $this->etiquetas($mascotas);
        $cantidadControl = $this->etiquetas($control);

        //dd($cantidadMasco);

            return view('admin.Admin', compact('cantidadCli', 'cantidadMasco', 'cantidadControl'));
        }else{
            
            return redirect()->route('inicio')->with('estado', 'No tienes permiso para acceder.');
        }
    }

    public function etiquetas($consulta)
    {
        $etiquetas = [];
        $valor = [];

        foreach ($consulta as $etiqueta) {
            if ($etiqueta->mes == 1) {
                array_push($etiquetas, 'Enero - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } elseif ($etiqueta->mes == 2) {
                array_push($etiquetas, 'Febrero - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } elseif ($etiqueta->mes == 3) {
                array_push($etiquetas, 'Marzo - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } elseif ($etiqueta->mes == 4) {
                array_push($etiquetas, 'Abril - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } elseif ($etiqueta->mes == 5) {
                array_push($etiquetas, 'Mayo - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } elseif ($etiqueta->mes == 6) {
                array_push($etiquetas, 'Junio - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } elseif ($etiqueta->mes == 7) {
                array_push($etiquetas, 'Julio - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } elseif ($etiqueta->mes == 8) {
                array_push($etiquetas, 'Agosto - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } elseif ($etiqueta->mes == 9) {
                array_push($etiquetas, 'Septiembre - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } elseif ($etiqueta->mes == 10) {
                array_push($etiquetas, 'Octubre - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } elseif ($etiqueta->mes == 11) {
                array_push($etiquetas, 'Noviembre - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            } else {
                array_push($etiquetas, 'Diciembre - ' . $etiqueta->anio);
                array_push($valor, $etiqueta->cantidad);
            }
        }
        return compact('etiquetas', 'valor');
    }



    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
