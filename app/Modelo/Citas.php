<?php 

namespace App\Modelo;

use App\Modelo\daocitas;


class Citas{

    private $fecha;

    public function __construct()
    {  
        
    }

    public function indexcitas(){

        $index= new daocitas();
        return $index;
    }



}
