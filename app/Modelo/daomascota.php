<?php

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daomascota
{


    private $query = "SELECT c.nombre AS Nombre,c.apellido AS Apellido,c.idCedula AS Cedula, m.nombre AS Mascota, m.numChip AS Chip, m.fecNacimi AS 'Fecha_de_nacimiento', TIMESTAMPDIFF(YEAR,m.fecNacimi , NOW()) 'Edad_Mascota', m.visible AS 'visible', m.idMascotas AS idMascota FROM cliente c JOIN mascota m ON m.cliente_idCedula=c.idCedula";
    private $query2 = "SELECT c.nombre AS Nombre,c.apellido AS Apellido,c.idCedula AS Cedula, TIMESTAMPDIFF(YEAR,m.fecNacimi , NOW()) 'Edad_Mascota', m.visible AS 'visible', m.* FROM cliente c JOIN mascota m ON m.cliente_idCedula=c.idCedula where numChip = :numChip";
    private $mascotas;

    public function __construct()
    {
    }

    public function getMascotas()
    {
        $this->mascotas = DB::select($this->query);
        return $this->mascotas;
    }

    public function setMascota($mascota)
    {

        DB::insert('INSERT INTO `mascota` (`numChip`, `nombre`, `especie`, `sexo`, `raza`, `fecNacimi`, `fecEsterili`, `visible`, `cliente_idCedula`) VALUES (:numChip, :nombre, :especie, :sexo, :raza, :fecNacimi, :fecEsterili, :visible ,:cliente_idCedula)', $mascota);
    }


    public function seleccionMascota($id)
    {
        $mascota = DB::select($this->query2, ['numChip' => $id]);
        return $mascota;
    }

    public function update($mascota)
    {
        DB::table('mascota')
            ->where('numChip', $mascota['numChip'])
            ->update($mascota);
    }

    public function delete($mascota)
    {
        DB::table('mascota')
            ->where('numChip', $mascota['numChip'])
            ->update($mascota);
    }
}
