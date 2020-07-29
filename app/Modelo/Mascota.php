<?php 

namespace App\Modelo;

use App\Modelo\daomascota;


class Mascota{

   
    private $dao;

    public function __construct()
    {
        $this->dao = new daomascota();
    }

    public function indexmascotas()
    {

        $index = $this->dao;
        return $index;
    }

    public function adminMascota(){
        return $this->dao->getMascotasAdmin();
    }

    public function guardarmascotas($mascota)
    {

        $this->dao->setMascota($mascota);
    }

    public function mostrarMascota($id)
    {

        $mascota = $this->dao->seleccionMascota($id);
        return $mascota;
    }


    public function Actualizar($mascota)
    {

        $this->dao->update($mascota);
    }

    public function borrar($mascota)
    {

        $this->dao->delete($mascota);
    }



}
