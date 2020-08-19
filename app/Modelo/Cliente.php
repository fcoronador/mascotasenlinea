<?php

namespace App\Modelo;

use App\Modelo\daocliente;


class Cliente
{

    private $dao;

    public function __construct()
    {
        $this->dao = new daocliente();
    }

    public function adminCliente(){
        return $this->dao->getClientesAdmin();
    }


    public function indexclientes()
    {

        $index = $this->dao;
        return $index;
    }

    public function guardarclientes($cliente)
    {

        $this->dao->setCliente($cliente);
    }

    public function mostrarCliente($id)
    {

        $cliente = $this->dao->seleccionCliente($id);
        return $cliente;
    }

    public function Actualizar($cliente)
    {

        $this->dao->update($cliente);
    }

    public function borrar($cliente)
    {

        $this->dao->delete($cliente);
    }

    public  function cliente($correo)
    {
        return $cliente = $this->dao->getClienteCorreo($correo);
    }
}
