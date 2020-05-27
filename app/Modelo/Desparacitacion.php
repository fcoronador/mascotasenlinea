<?php 

namespace App\Modelo;

use App\Modelo\daodespara;


class Desparacitacion{

    private $idDespara;
    private $nombre;

    public function __construct()
    {  
        
    }

    public function indexdespara(){

        $index= new daodespara();
        return $index;
    }
}