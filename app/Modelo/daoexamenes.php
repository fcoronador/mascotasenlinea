<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoexamenes{

    private $query='select * from examenes';
    private $query2 = 'SELECT  YEAR(createdAt ) AS anio, MONTH(createdAt) AS mes, count(nombre) AS cantidad FROM examenes e GROUP BY MONTH (createdAt), YEAR (createdAt)';
    private $listaexamenes;
    private $query3='select m.nombre  AS Mascota, p.fecha AS Fecha, e.tipo AS Tipo, 
	e.resulta AS Resultado, e.lab AS Laboratorio
    from ((cliente c join mascota m on c.idCedula= m.cliente_idCedula)
    LEFT JOIN procedi p	on p.mascota_idMascotas= m.idMascotas)
    left join examenes e on p.examenes_idExam = e.idExam WHERE m.numChip= :numChip';

    public function __construct()
    {  
        
    }

    public function getExamenesAdmin()
    {
        $cantidad= DB::select($this->query2);
        return $cantidad; 
    }

    public function getHistoriaExamen($id)
    {
        $examen = DB::select($this->query3, ['numChip' => $id]);
        return $examen;
    }

    public function getExamenes()
    {
        $this->listaexamenes = DB::select($this->query);
        return $this->listaexamenes;
    }

    public function setExamen($examen)
    {
        DB::insert('insert into examenes (idExam, tipo, resulta, lab)
                    VALUES (:idExam, :tipo, :resulta, :lab)', $examen);
    }

    public function seleccionExamen($id)
    {
        $examen = DB::select('select * from examenes where idExam = :idExam', ['idExam' => $id]);
        return $examen;
    }

    public function update($examen)
    {
        DB::table('examenes')
            ->where('idExam', $examen['idExam'])
            ->update($examen);
    }

    public function delete($examen)
    {
        DB::table('examenes')
            ->where('idExam', $examen['idExam'])
            ->update($examen);
    }
}