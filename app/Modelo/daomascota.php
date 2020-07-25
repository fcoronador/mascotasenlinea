<?php

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daomascota
{


    private $query = "SELECT c.nombre AS Nombre,c.apellido AS Apellido,c.idCedula AS Cedula, m.nombre AS Mascota, m.numChip AS Chip, m.fecNacimi AS 'Fecha_de_nacimiento', TIMESTAMPDIFF(YEAR,m.fecNacimi , NOW()) 'Edad_Mascota', m.visible AS 'visible' FROM cliente c JOIN mascota m ON m.cliente_idCedula=c.idCedula";
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
        $mascota = DB::select('select * from mascota where numChip = :numChip', ['numChip' => $id]);
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

        /*  DB::table('controles')->where('mascota_idMascotas', '=', 5)->delete();
        DB::table('procedi')->where('mascota_idMascotas', '=', 5)->delete();
        DB::table('mascota')->where('cliente_idCedula', '=', $id)->delete();

        DB::table('citas')->where('cliente_idCedula', '=', $id)->delete();
        DB::table('cliente')->where('idCedula', '=', $id)->delete(); */
    }
}
