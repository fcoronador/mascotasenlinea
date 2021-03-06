<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Mascota;

class ControlMascota extends Controller
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Mascota();
    }

    public static function listMascotas(){
        
        $modelo = new Mascota();
        $mascotas = $modelo->indexmascotas()->getMascotas();
        return $mascotas;
    }
    public static function cantMascotas(){
        
        $modelo = new Mascota();
        $mascotas = $modelo->adminMascota();
        return $mascotas;
    }
    
    public function mascotasPorCliente($id)
    {
        return $this->modelo->MascotasCliente($id);
    }

    public function HistoriaClinica($id)
    {
        return $this->modelo->historiaMascota($id);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = $this->modelo->indexmascotas()->getMascotas();

        foreach ($mascotas as $item) {
            $item->edad = $this->ago(date_create($item->Fecha_de_nacimiento));
        }

        return view('mascota.indexMascota', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = ControlCliente::listClientes();

        if(session('rol')===3){
            return view('cliente.crearmascota');
        }else if (session('rol')===2 || session('rol')===1)
        {
            return view('mascota.crearMascota', compact('clientes'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mascota $index)
    {
        request()->validate(
            [
            'numChip'=>'required|digits_between:5,15',
            'nombre'=>'required|between:3,39',
            'especie'=>'required|between:3,39',
            'sexo'=>'required',
            'raza'=>'required|between:3,39',
            'fecNacimi'=>'required'
            ],[
                'numChip.required'=>'Se necesita el número de identificación.',
                'numChip.digits_between'=>'La longitud del número de identificación debe estar entre 5-20 caracteres.',
                'nombre.required'=>'Se necesita el nombre de la mascota.',
                'nombre.between'=>'La longitud del nombre debe estar entre 3-39 caracteres.',
                'especie.required'=>'Se necesita el nombre de la especie.',
                'especie.between'=>'La longitud del nombre debe estar entre 3-39 caracteres.',
                'sexo.required'=>'Se necesita el sexo de la mascota.',
                'raza.required'=>'Se necesita el nombre de la raza.',
                'raza.between'=>'La longitud del nombre debe estar entre 3-39 caracteres.',
                'fecNacimi.required'=>'Se necesita la fecha de nacimiento de la mascota.'
            ]);
        
        $mascota = [];
        $mascota['numChip'] = $request->get('numChip');
        $mascota['nombre'] = $request->get('nombre');
        $mascota['especie'] = $request->get('especie');
        $mascota['sexo'] = $request->get('sexo');
        $mascota['raza'] = $request->get('raza');
        $mascota['fecNacimi'] = str_replace('-','/',$request->get('fecNacimi'));
        if($request->get('fecEsterili')){$mascota['fecEsterili'] = str_replace('-','/',$request->get('fecEsterili'));}
        else{$mascota['fecEsterili'] = $request->get('fecEsterili');}
        $mascota['cliente_idCedula'] = $request->get('idCedula');
        $mascota['visible'] = 1;
        //dd($mascota);
        $index->guardarmascotas($mascota);

        if(session('rol')===3){
            return redirect()->route('usuario')->with('estado', 'La mascota se ha creado con éxito.');
        }else if (session('rol')===2 || session('rol')===1)
        {
            return redirect()->route('indexmascota')->with('estado', 'La mascota se ha creado con éxito.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mascota = $this->modelo->mostrarMascota($id);
        return view('mascota.showMascota', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mascota = $this->modelo->mostrarMascota($id);

        foreach($mascota as $item){
            $item->fecNacimi = str_replace('/','-',$item->fecNacimi);
            if($item->fecEsterili)
            {$item->fecEsterili = str_replace('/','-',$item->fecEsterili);}
        }
        return view('mascota.editMascota', compact('mascota', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        request()->validate([
            'numChip'=>'required|digits_between:5,15',
            'nombre'=>'required|between:3,39',
            'especie'=>'required|alpha_dash|between:3,39',
            'sexo'=>'required',
            'raza'=>'required|alpha_dash|between:3,39',
            'fecNacimi'=>'required'
            ],[
                'numChip.required'=>'Se necesita el número de identificación.',
                'numChip.digits_between'=>'La longitud del número de identificación debe estar entre 5-20 caracteres.',
                'nombre.required'=>'Se necesita el nombre de la mascota.',
                'nombre.between'=>'La longitud del nombre debe estar entre 3-39 caracteres.',
                'especie.required'=>'Se necesita el nombre de la especie.',
                'especie.between'=>'La longitud del nombre debe estar entre 3-39 caracteres.',
                'sexo.required'=>'Se necesita el sexo de la mascota.',
                'raza.required'=>'Se necesita el nombre de la raza.',
                'raza.between'=>'La longitud del nombre debe estar entre 3-39 caracteres.',
                'fecNacimi.required'=>'Se necesita la fecha de nacimiento de la mascota.'
            ]);

        $mascota = [];
        $mascota['numChip'] = $request->get('numChip');
        $mascota['nombre'] = $request->get('nombre');
        $mascota['especie'] = $request->get('especie');
        $mascota['sexo'] = $request->get('sexo');
        $mascota['raza'] = $request->get('raza');
        $mascota['fecNacimi'] = str_replace('-','/',$request->get('fecNacimi'));
        if($request->get('fecEsterili')){$mascota['fecEsterili'] = str_replace('-','/',$request->get('fecEsterili'));}
        else{$mascota['fecEsterili'] = $request->get('fecEsterili');}
        $mascota['cliente_idCedula'] = $request->get('idCedula');

        $this->modelo->Actualizar($mascota);

        if(session('rol')===3){
            return redirect()->route('usuario')->with('estado', 'La mascota se ha actualizado con éxito.');
        }else if (session('rol')===2 || session('rol')===1)
        {
            return redirect()->route('indexmascota')->with('estado', 'La mascota se ha actualizado con éxito');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mascota['numChip'] = $id;
        $mascota['visible'] = false;
        $this->modelo->borrar($mascota);

        if(session('rol')===3){
            return redirect()->route('usuario')->with('estado', 'La mascota se ha eliminado con éxito.');
        }else if (session('rol')===2 || session('rol')===1)
        {
            return redirect()->route('indexmascota')->with('estado', 'La mascota se ha sido eliminado con éxito');
        }
    }

    public function pluralize($count, $text)
    {
        if($text=='mes')
        {
            return $count . (($count == 1) ? (" $text") : (" ${text}es"));
        }else{
            return $count . (($count == 1) ? (" $text") : (" ${text}s"));
        }
    }

    public function ago($datetime)
    {
        $interval = date_create('now')->diff($datetime);
        $suffix = ($interval->invert ? '' : '');
        if ($v = $interval->y >= 1) return $suffix . $this->pluralize($interval->y, 'año');
        if ($v = $interval->m >= 1) return $suffix . $this->pluralize($interval->m, 'mes');
        if ($v = $interval->d >= 1) return $suffix . $this->pluralize($interval->d, 'dia');
        if ($v = $interval->h >= 1) return $suffix . $this->pluralize($interval->h, 'hora');
        if ($v = $interval->i >= 1) return $suffix . $this->pluralize($interval->i, 'minuto');
        return $suffix . $this->pluralize($interval->s, 'segundo');
    }

}
