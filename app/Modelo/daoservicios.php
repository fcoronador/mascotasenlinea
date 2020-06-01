<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoservicios{

    private $query='select * from servicios';
    private $listaservicios;

    public function __construct()
    {  
        
    }

    public function getServicios(){

        $this->listaservicios=DB::select($this->query);
        return $this->listaservicios;

    }

}
