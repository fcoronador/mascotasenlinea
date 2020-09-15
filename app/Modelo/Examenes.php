<?php 

namespace App\Modelo;

use App\Modelo\daoexamenes;

class Examenes{

    private $dao;

    public function __construct()
    {
        $this->dao = new daoexamenes();
    }

    public function adminExamen()
    {
        return $this->dao->getExamenesAdmin();
    }

    public function historiaExamen($id)
    {
        return $this->dao->getHistoriaExamen($id);
    }

    public function indexexamenes()
    {
        $index = $this->dao;
        return $index;
    }

    public function guardarexamenes($examen)
    {
        $this->dao->setExamen($examen);
    }

    public function mostrarExamen($id)
    {
        $examen = $this->dao->seleccionExamen($id);
        return $examen;
    }

    public function Actualizar($examen)
    {
        $this->dao->update($examen);
    }

    public function borrar($examen)
    {
        $this->dao->delete($examen);
    }
}