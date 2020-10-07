<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoprocedi{

    private $query="select m.numChip, m.nombre, m.especie, e.tipo AS 'Tipo_de_examen' ,date_format(p.fecha,'%d-%m-%Y') AS Fecha, v.nombre AS Vacuna, 
    date_format(p.sigDosis,'%d-%m-%Y') AS 'SiguienteVacuna', d.nombre AS Desparacitante, date_format(p.sigDosis,'%d-%m-%Y') AS 'SiguienteDosis', 
    p.visible, p.idProc, vet.nombre AS 'Veterinario'
    from (((((cliente c join mascota m on c.idCedula= m.cliente_idCedula)
    	LEFT JOIN procedi p	on p.mascota_idMascotas= m.idMascotas)
        left join examenes e on p.examenes_idExam = e.idExam)
        left join vacunas v on  v.idVacun = p.vacunas_idVacun)
        left join despara d on d.idDespara = p.despara_idDespara)
        left join veterin vet on p.veterin_idVeterin = vet.idVeterin";
    private $query2 = 'SELECT  YEAR(createdAt ) AS anio, MONTH(createdAt) AS mes, count(nombre) AS cantidad FROM procedi p GROUP BY MONTH (createdAt), YEAR (createdAt)';
    
    private $listaprocedimientos;

    public function __construct()
    {  
        
    }

    public function getProcediAdmin(){
        $cantidad= DB::select($this->query2);
        return $cantidad; 
    }

    public function getProcedi(){
        $this->listaprocedimientos=DB::select($this->query);
        return $this->listaprocedimientos;
    }

    public function setProcedi($procedi){
        DB::insert('insert into procedi (fecha, sigDosis, mascota_idMascotas, vacunas_idVacun, despara_idDespara, veterin_idVeterin, examenes_idExam, visible)
                    VALUES (:fecha, :sigDosis, :mascota_idMascotas, :vacunas_idVacun, :despara_idDespara, :veterin_idVeterin, :examenes_idExam, :visible)',$procedi);
    }

    public function seleccionProcedi($id){
        $procedi=DB::select('select * from procedi where idProc = :idProc', ['idProc'=> $id]);
        return $procedi;
    }    

    public function update($procedi){
        DB::table('procedi')
        ->where('idProc',$procedi['idProc'])
        ->update($procedi);
    }

    public function delete($procedi){ 
        DB::table('procedi')
        ->where('idProc',$procedi['idProc'])
        ->update($procedi);
    }
}