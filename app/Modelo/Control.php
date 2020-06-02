<?php 

namespace App\Modelo;

use App\Modelo\daocontrol;


class Control{

    private $idcedula;

    public function __construct()
    {  
        
    }

    public function indexcontroles(){

        $index= new daocontrol();
        return $index;
    }



}
