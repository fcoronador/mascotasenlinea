<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daovacunas{

    private $query='select * from vacunas';
    private $query2 = 'SELECT  YEAR(createdAt ) AS anio, MONTH(createdAt) AS mes, count(nombre) AS cantidad FROM vacunas v GROUP BY MONTH (createdAt), YEAR (createdAt)';
    private $listavacuna;
    private $query3='select m.nombre AS Mascota, p.fecha AS Fecha,p.sigDosis, v.nombre AS Vacuna
    from ((cliente c join mascota m on c.idCedula= m.cliente_idCedula)
    	LEFT JOIN procedi p	on p.mascota_idMascotas= m.idMascotas)
        left join vacunas v on p.vacunas_idVacun = v.idVacun WHERE m.numChip= :numChip';

    public function __construct()
    {  
        
    }

    public function getVacunaAdmin(){
        $cantidad= DB::select($this->query2);
        return $cantidad; 
    }

    public function getHistoriaVacuna($id)
    {
        $vacuna = DB::select($this->query3, [':numChip' => $id]);
        return $vacuna;
    }



    public function getVacunas(){
        $this->listavacuna=DB::select($this->query);
        return $this->listavacuna;
    }

    public function setVacunas($vacuna)
    {
        DB::insert('insert into vacunas (idVacun, nombre) VALUES (:idVacun, :nombre)', $vacuna);
    }

    public function seleccionVacuna($id)
    {
        $vacuna = DB::select('select * from vacunas where idVacun = :idVacun', ['idVacun' => $id]);
        return $vacuna;
    }

    public function update($vacuna)
    {
        DB::table('vacunas')
            ->where('idVacun', $vacuna['idVacun'])
            ->update($vacuna);
    }

    public function delete($vacuna)
    {
        DB::table('vacunas')
            ->where('idVacun', $vacuna['idVacun'])
            ->update($vacuna);
    }
}