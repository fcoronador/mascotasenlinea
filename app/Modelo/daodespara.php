<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daodespara{

    private $query='select * from despara';
    private $listadesparacitacion;

    public function __construct()
    {  
        
    }

    public function getDespara(){
        $this->$listadesparacitacion=DB::select($this->query);
        return $this->$listadesparacitacion;
    }

}