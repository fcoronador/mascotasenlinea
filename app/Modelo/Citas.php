<?php 

namespace App\Modelo;

use App\Modelo\daocitas;


class Citas{

    private $fecha;

    public function __construct()
    {  
        $this->dao = new daocitas();
    }

    public function indexcitas(){

        //$index= new daocitas();
        
        $index = $this->dao;
        return $index;
    }

    public function adminCitas(){
        return $this->dao->getCitasAdmin();
    }

     public function guardarcita($Citas)
    {

        $this->dao->setCitas($Citas);
    }

    public function guardarcita2($Citas)
    {

        $this->dao->setCitas($Citas);
    }
    public function mostrarCita($id)
    {
        $cliente = $this->dao->seleccionCita($id);
        return $cliente;
    }


    public function mostrarEditCita($idCita)
    {
        $cliente = $this->dao->editCita($idCita);
        return $cliente;
    }


    public function Actualizar($cita)
    {

        $this->dao->update($cita);
    }
    

    public function borrar($cita)
    {

        $this->dao->delete($cita);
    }

}
