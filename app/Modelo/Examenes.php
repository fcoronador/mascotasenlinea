<?php 

namespace App\Modelo;

use App\Modelo\daoexamenes;


class Examenes{

    private $idExam;
    private $tipo;
    private $resulta;
    private $lab;

    public function __construct()
    {  
        
    }

    public function indexexam(){
        $index= new daoexamenes();
        return $index;
    }
}