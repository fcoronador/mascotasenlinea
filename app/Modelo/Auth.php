<?php 

namespace App\Modelo;

use App\Modelo\daoauth;


class Auth{

    private $fecha;

    public function __construct()
    {  
        $this->dao = new daoauth();
    }

    public function indexcitas(){

        //$index= new daocitas();
        
        $index = $this->dao;
        return $index;
    }

     public function guardarcita($cita)
    {

        $this->dao->setCitas($cita);
    }

    public function mostrarCita($id)
    {
        $cliente = $this->dao->seleccionCita($id);
        return $cliente;
    }

/* 
    public function Actualizar($cita)
    {

        $this->dao->update($cita);
    }

    public function borrar($cita)
    {

        $this->dao->delete($cita);
    } */

}
