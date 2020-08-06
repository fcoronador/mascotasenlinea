<?php 

namespace App\Modelo;

use App\Modelo\daoauth;


class Auth{

    private $fecha;

    public function __construct()
    {  
        $this->dao = new daoauth();
    }

    public function index(){

        //$index= new daocitas();
        
        $index = $this->dao;
        return $index;
    }

    public function guardarCliente($persona)
    {
        $this->dao->setCliente($persona);
    }

    public function verificarCorreo($correo)
    {
        $existe = $this->dao->verificarCorreo($correo);
        return $existe;
    }



   /*  public function mostrarCita($id)
    {
        $cliente = $this->dao->seleccionCita($id);
        return $cliente;
    } */

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
