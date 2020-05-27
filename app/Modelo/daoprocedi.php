<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoprocedi{

    private $query='select * from procedi';
    private $listaprocedimientos;

    public function __construct()
    {  
        
    }

    public function getProcedi(){
        $this->listaprocedimientos=DB::select($this->query);
        return $this->listaprocedimientos;
    }

}