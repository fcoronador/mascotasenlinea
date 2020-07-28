<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daocitas{
//select date_format(fecha,"%m-%d-%Y") as fecha, hora, motivo from citas where cliente_idCedula ="100"
    private $query='select date_format(fecha,"%m-%d-%Y") as fecha, hora, motivo, visible from citas ';
    private $listacitas;

    public function __construct()
    {  
        
    }

    public function getCitas(){

        $this->listacitas=DB::select($this->query);
        return $this->listacitas;

    }

    public function setCitas($id)
    {
        DB::insert('insert into citas (fecha, hora, motivo, cliente_idCedula, servicios_idServi, visible)
                    VALUES (:fecha, :hora, :motivo, :cliente_idCedula, :servicios_idServi, :visible)',$id);
    }

    public function seleccionCita($id)
    {
       $citas = DB::select('SELECT  date_format(c.fecha,"%m-%d-%Y") AS Fecha ,c.hora AS Hora ,c.motivo AS Motivo, c.visible as visible,
       s.servicios AS Servicio ,v.nombre AS Veterinario
       FROM (citas c JOIN servicios s ON c.servicios_idServi=s.idServi)
       LEFT JOIN veterin v ON v.idVeterin = s.veterin_idVeterin  where cliente_idCedula = :idCedula', ['idCedula' => $id]);
        return $citas;

    }
}
