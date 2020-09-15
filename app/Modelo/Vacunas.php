<?php 

namespace App\Modelo;

use App\Modelo\daovacunas;

class Vacunas{

    private $dao;

    public function __construct()
    {  
        $this->dao = new daovacunas();
    }

    public function adminVacuna()
    {
        return $this->dao->getVacunaAdmin();
    }

    public function historiaVacuna($id)
    {
        return $this->dao->getHistoriaVacuna($id);
    }

    public function indexvacunas()
    {
        $index = $this->dao;
        return $index;
    }

    public function guardarvacuna($vacuna)
    {
        $this->dao->setVacunas($vacuna);
    }

    public function mostrarvacuna($id)
    {
        $vacuna = $this->dao->seleccionVacuna($id);
        return $vacuna;
    }

    public function Actualizar($vacuna)
    {
        $this->dao->update($vacuna);
    }

    public function borrar($vacuna)
    {
        $this->dao->delete($vacuna);
    }
}