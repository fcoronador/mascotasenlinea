<?php 

namespace App\Modelo;

use App\Modelo\daoprocedi;


class Procedimiento{

    private $idMascotas;
    private $idVacun;
    private $idDespara;
    private $idVeterin;
    private $idExam;

    public function __construct()
    {  
        
    }

    public function indexprocedi(){
        $index= new daoprocedi();
        return $index;
    }
}