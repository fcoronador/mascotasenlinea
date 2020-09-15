<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daodespara{

    private $query='select * from despara';
    private $query2 = 'SELECT  YEAR(createdAt ) AS anio, MONTH(createdAt) AS mes, count(nombre) AS cantidad FROM despara d GROUP BY MONTH (createdAt), YEAR (createdAt)';
    private $listadesparacitacion;

    private $query3='select m.nombre AS Nombre, p.fecha AS Fecha, p.sigDosis, d.nombre AS Desparacitante
    from ((cliente c join mascota m on c.idCedula= m.cliente_idCedula)
    LEFT JOIN procedi p	on p.mascota_idMascotas= m.idMascotas)
    left join despara d on p.despara_idDespara = d.idDespara WHERE m.numChip= :numChip';

    public function __construct()
    {  
        
    }

    public function getDesparaAdmin(){
        $cantidad= DB::select($this->query2);
        return $cantidad; 
    }

    public function getHistoriaDespara($id)
    {
        $despara = DB::select($this->query3, ['numChip' => $id]);
        return $despara;
    }



    public function getDesparas(){
        $this->listadesparacitacion=DB::select($this->query);
        return $this->listadesparacitacion;
    }

    public function setDesparas($despara)
    {
        DB::insert('insert into despara (idDespara, nombre) VALUES (:idDespara, :nombre)', $despara);
    }

    public function seleccionDespara($id)
    {
        $despara = DB::select('select * from despara where idDespara = :idDespara', ['idDespara' => $id]);
        return $despara;
    }

    public function update($despara)
    {
        DB::table('despara')
            ->where('idDespara', $despara['idDespara'])
            ->update($despara);
    }

    public function delete($despara)
    {
        DB::table('despara')
            ->where('idDespara', $despara['idDespara'])
            ->update($despara);
    }
}