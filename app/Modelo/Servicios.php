<?php 

namespace App\Modelo;

use App\Modelo\daoservicios;


class Servicios{

    private $nombre;

    public function __construct()
    {  
        $this->dao = new daoservicios();
    }

    public function indexservicios(){

        $index = $this->dao;
        return $index;
    }

    public function adminServi(){
        return $this->dao->getServiciosAdmin();
    }

    public function guardarservicio($servicio)
    {
        $this->dao->setServicios($servicio);
    }


    public function mostrarservicio($id)
    {
        $servicio = $this->dao->seleccionServicio($id);
        return $servicio;
    }

    public function Actualizar($servicio)
    {
        $this->dao->update($servicio);
    }

    public function borrar($servicio)
    {
        $this->dao->delete($servicio);
    }



}
