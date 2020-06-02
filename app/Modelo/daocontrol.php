<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daocontrol{

    private $query='select * from control';
    private $listacontroles;

    public function __construct()
    {  
        
    }

    public function getControles(){

        $this->listacontroles=DB::select($this->query);
        return $this->listacontroles;

    }

}
