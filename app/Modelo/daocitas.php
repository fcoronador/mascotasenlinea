<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daocitas{

    private $query='select * from citas';
    private $listacitas;

    public function __construct()
    {  
        
    }

    public function getCitas(){

        $this->listacitas=DB::select($this->query);
        return $this->listacitas;

    }

}
