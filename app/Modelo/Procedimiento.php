<?php 

namespace App\Modelo;

use App\Modelo\daoprocedi;


class Procedimiento{

    private $dao;

    public function __construct()
    {  
        $this->dao = new daoprocedi();
    }

    public function adminProcedi()
    {
        return $this->dao->getProcediAdmin();
    }

    public function indexprocedi(){
        $index= $this->dao;
        return $index;
    }

    public function guardarprocedi($procedi){
        $this->dao->setProcedi($procedi);
    }

    public function mostrarprocedi($id){
        $procedi = $this->dao->seleccionProcedi($id);
        return $procedi;
    }

    public function Actualizar($procedi){
        $this->dao->update($procedi);
    }

    public function borrar($procedi){
        $this->dao->delete($procedi);
    }
}