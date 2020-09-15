<?php 

namespace App\Modelo;

use App\Modelo\daocontrol;
 

class Control{

    private $dao;

    public function __construct()
    {
        $this->dao = new daocontrol();
    }

    public function indexcontroles()
    {

        $index = $this->dao;
        return $index;
    }

    public function adminControl(){
        return $this->dao->getControlesAdmin();
    }

    public function controlMascota($id)
    {
        return $this->dao->getControlporMascota($id);
    }




    public function guardarcontroles($control)
    {

        $this->dao->setControl($control);
    }

    public function mostrarControl($id)
    {

        $control = $this->dao->seleccionControl($id);
        return $control;
    }


    public function Actualizar($control)
    {

        $this->dao->update($control);
    }

    public function borrar($control)
    {

        $this->dao->delete($control);
    }



}
