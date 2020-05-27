<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daovacunas{

    private $query='select * from vacunas';
    private $listavacunas;

    public function __construct()
    {  
        
    }

    public function getVacuna(){
        $this->$listavacunas=DB::select($this->query);
        return $this->$listavacunas;
    }

}