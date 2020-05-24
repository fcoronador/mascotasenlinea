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



}
