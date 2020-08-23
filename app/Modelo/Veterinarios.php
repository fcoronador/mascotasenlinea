<?php 

namespace App\Modelo;

use App\Modelo\daoveterinarios;


class Veterinarios{

    private $nombre;

    public function __construct()
    {  
        $this->dao = new daoveterinarios();
    }

    public function indexveterinarios(){

        $index = $this->dao;
        return $index;
    }

    public function guardarveterinario($veterinario)
    {
        $this->dao->setVeterinario($veterinario);
    }


    public function mostrarveterinario($id)
    {
        $veterinario = $this->dao->seleccioVeterinario($id);
        return $veterinario;
    }

    public function Actualizar($veterinario)
    {
        $this->dao->update($veterinario);
    }

    public function borrar($veterinario)
    {
        $this->dao->delete($veterinario);
    }



}
