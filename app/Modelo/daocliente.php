<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daocliente{

    private $query='select * from cliente';
    private $listaclientes;

    public function __construct()
    {  
        
    }

    public function getClientes(){

        $this->listaclientes=DB::select($this->query);
        return $this->listaclientes;

    }

}
