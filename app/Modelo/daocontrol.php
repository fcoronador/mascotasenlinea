<?php

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daocontrol
{

    private $query = 'SELECT  u.nombre AS Cliente, m.nombre AS Mascota, m.idMascotas AS idMascota ,c.fecha AS Fecha,c.peso AS Peso,
	c.diagnos AS Diagnostico,c.trata AS Tratamiento,c.observ AS Observacion,
    v.nombre AS Veterinario, v.cargo AS Cargo, c.visible AS visible, c.idControl AS ID   
	FROM((controles c JOIN mascota m ON c.mascota_idMascotas=m.idMascotas) 
	LEFT JOIN cliente u ON u.idCedula=m.cliente_idCedula)
    LEFT JOIN veterin v ON v.idVeterin=c.veterin_idVeterin ';

    private $query2 = 'SELECT  u.nombre AS Cliente, m.nombre AS Mascota,c.fecha AS Fecha,c.peso AS Peso,
	c.diagnos AS Diagnostico,c.trata AS Tratamiento,c.observ AS Observacion,
    v.nombre AS Veterinario, v.cargo AS Cargo  
	FROM((controles c JOIN mascota m ON c.mascota_idMascotas=m.idMascotas) 
	LEFT JOIN cliente u ON u.idCedula=m.cliente_idCedula)
    LEFT JOIN veterin v ON v.idVeterin=c.veterin_idVeterin where idControl = :idControl';

    private $query3 = 'SELECT  YEAR(createdAt ) AS anio, MONTH(createdAt) AS mes ,count(idControl) AS cantidad FROM controles GROUP BY MONTH (createdAt), YEAR (createdAt)';

    private $query4 ='SELECT  u.nombre AS Cliente, m.nombre AS Mascota,c.fecha AS Fecha,c.peso AS Peso,
	c.diagnos AS Diag,c.trata AS Trata,c.observ AS Obser,
    v.nombre AS Veterinario, v.cargo AS Cargo  
	FROM((controles c JOIN mascota m ON c.mascota_idMascotas=m.idMascotas) 
	LEFT JOIN cliente u ON u.idCedula=m.cliente_idCedula)
    LEFT JOIN veterin v ON v.idVeterin=c.veterin_idVeterin 
	WHERE m.numChip=:numChip';

    private $listacontroles;

    public function __construct()
    {
    }

    public function getControlesAdmin()
    {
        $cantidad = DB::select($this->query3);
        return $cantidad;
    }

    public function getControlporMascota($id)
    {
        $control = DB::select($this->query4, ['numChip' => $id]);
        return $control;
    }

    public function getControl()
    {
        $this->controles = DB::select($this->query);
        return $this->controles;
    }

    public function setControl($control)
    {

        DB::insert('INSERT INTO `controles` (`fecha`, `peso`, `diagnos`, `trata`, `observ`, `mascota_idMascotas`, `veterin_idVeterin`) VALUES (:fecha, :peso, :diagnos, :trata, :observ, :mascota_idMascotas, :veterin_idVeterin)', $control);
    }


    public function seleccionControl($id)
    {
        $control = DB::select($this->query2, ['idControl' => $id]);
        return $control;
    }

    public function update($control)
    {
        DB::table('controles')
            ->where('idControl', $control['idControl'])
            ->update($control);
    }

    public function delete($control)
    {
        DB::table('controles')
            ->where('idControl', $control['idControl'])
            ->update($control);
    }
}
