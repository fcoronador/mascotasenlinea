<?php 

namespace App\Modelo;

use App\Modelo\daocliente;


class Cliente{

    private $idcedula;

    public function __construct()
    {  
        
    }

    public function indexclientes(){

        $index= new daocliente();
        return $index;
    }

    public function guardarclientes($cliente){

        $index= new daocliente();
        $index->setCliente($cliente);
    }

    public function mostrarCliente($id){

        $index= new daocliente();
        $cliente=$index->seleccionCliente($id);
        return $cliente;
    }


}
