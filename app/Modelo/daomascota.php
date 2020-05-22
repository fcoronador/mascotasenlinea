<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daomascota{

    private $query='select * from mascotas';
    private $listamascotas;

    public function __construct()
    {  
        
    }

    public function getMascotas(){

        $this->listamascotas=DB::select($this->query);
        return $this->listamascotas;

    }

}
