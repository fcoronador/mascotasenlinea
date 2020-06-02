<?php 

namespace App\Modelo;

use App\Modelo\daomascota;


class Mascota{

    private $idcedula;

    public function __construct()
    {  
        
    }

    public function indexmascotas(){

        $index= new daomascota();
        return $index;
    }



}
