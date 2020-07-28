<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoexamenes{

    private $query='select * from examenes';
    private $listaexamenes;

    public function __construct()
    {  
        
    }

    public function getExamenes(){
        $this->$listaexamenes=DB::select($this->query);
        return $this->$listaexamenes;
    }

    public function setCliente($cliente)
    {
        DB::insert('insert into cliente (idCedula, nombre, apellido, telefono, direccion, correo, contrasena)
                    VALUES (:idCedula, :nombre, :apellido, :telefono, :direccion, :correo, :contrasena)', $cliente);
    }

}