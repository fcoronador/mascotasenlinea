<?php 

namespace App\Modelo;

use App\Modelo\daoservicios;


class Servicios{

    private $nombre;

    public function __construct()
    {  
        
    }

    public function indexservicios(){

        $index= new daoservicios();
        return $index;
    }



}
