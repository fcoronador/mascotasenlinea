<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoexamenes{

    private $query='select * from examenes';
    private $listaexamenes;

    public function __construct()
    {  
        
    }

    public function getExam(){
        $this->$listaexamenes=DB::select($this->query);
        return $this->$listaexamenes;
    }

}