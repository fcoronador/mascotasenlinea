<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daocliente{

    private $query='select * from cliente';
    private $listaclientes;

    public function __construct()
    {  
        
    }

    public function getClientes(){

        $this->listaclientes=DB::select($this->query);
        return $this->listaclientes;
    }

    public function setCliente($cliente){

        DB::insert('insert into cliente (idCedula, nombre, apellido, telefono, direccion, correo, contrasena)
                    VALUES (:idCedula, :nombre, :apellido, :telefono, :direccion, :correo, :contrasena)',$cliente);

    }


    public function seleccionCliente($id){

        $cliente=DB::select('select * from cliente where nombre = :nombre',['nombre'=> $id]);
        return $cliente;
    }    

}
