<?php 

namespace App\Modelo;

use App\Modelo\daovacunas;


class Vacunas{

    private $idVacun;
    private $nombre;
    
    public function __construct()
    {  
        
    }

    public function indexvacuna(){
        $index= new daovacunas();
        return $index;
    }
}