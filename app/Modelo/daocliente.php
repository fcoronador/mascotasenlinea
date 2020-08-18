<?php

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daocliente
{

    private $query = 'select * from cliente';
    private $query2 = 'SELECT  YEAR(createdAt ) AS anio, MONTH(createdAt) AS mes ,count(nombre) AS cantidad FROM cliente c GROUP BY MONTH (createdAt), YEAR (createdAt)';
    private $listaclientes;

    public function __construct()
    {
    }

    public function getClientesAdmin(){
        $cantidad= DB::select($this->query2);
        return $cantidad; 
    }

    public function getClientes()
    {

        $this->listaclientes = DB::select($this->query);
        return $this->listaclientes;
    }

    public function setCliente($cliente)
    {

        DB::insert('insert into cliente (idCedula, nombre, apellido, telefono, direccion, correo, contrasena)
                    VALUES (:idCedula, :nombre, :apellido, :telefono, :direccion, :correo, :contrasena)', $cliente);
    }


    public function seleccionCliente($id)
    {

        $cliente = DB::select('select * from cliente where idCedula = :idCedula', ['idCedula' => $id]);
        return $cliente;
    }

    public function update($cliente)
    {


        DB::table('cliente')
            ->where('idCedula', $cliente['idCedula'])
            ->update($cliente);
    }

    public function delete($cliente)
    {

        DB::table('cliente')
            ->where('idCedula', $cliente['idCedula'])
            ->update($cliente);

       /*  DB::table('controles')->where('mascota_idMascotas', '=', 5)->delete();
        DB::table('procedi')->where('mascota_idMascotas', '=', 5)->delete();
        DB::table('mascota')->where('cliente_idCedula', '=', $id)->delete();

        DB::table('citas')->where('cliente_idCedula', '=', $id)->delete();
        DB::table('cliente')->where('idCedula', '=', $id)->delete(); */
    }

    public function getClienteCorreo($correo)
    {
        return $cliente = DB::select('select * from cliente where correo = :correo',['correo'=>$correo]);
    }
}
