<?php 

namespace App\Modelo;

use App\Modelo\daodespara;


class Desparacitacion{

    private $dao;

    public function __construct()
    {  
        $this->dao = new daodespara();
    }

    public function indexdesparas()
    {
        $index = $this->dao;
        return $index;
    }

    public function guardardesparaci($despara)
    {
        $this->dao->setDesparas($despara);
    }

    public function mostrardespara($id)
    {
        $despara = $this->dao->seleccionDespara($id);
        return $despara;
    }

    public function Actualizar($despara)
    {
        $this->dao->update($despara);
    }

    public function borrar($despara)
    {
        $this->dao->delete($despara);
    }
}