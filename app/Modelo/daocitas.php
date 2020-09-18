<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daocitas{
//select date_format(fecha,"%m-%d-%Y") as fecha, hora, motivo from citas where cliente_idCedula ="100"
    private $query='SELECT  date_format(c.fecha,"%d-%m-%Y") AS Fecha , c.idCitas AS idCita,c.hora AS Hora ,c.motivo AS Motivo, c.visible as visible,
    s.servicios AS Servicio ,v.nombre AS Veterinario, cli.nombre as clientes
    FROM (citas c JOIN servicios s ON c.servicios_idServi=s.idServi)
    LEFT JOIN veterin v ON v.idVeterin = c.veterin_idVeterin 
    LEFT JOIN cliente cli on cli.idCedula = c.cliente_idCedula';
    private $query2 = 'SELECT  YEAR(fecha) AS anio, MONTH(fecha) AS mes ,count(visible) AS cantidad FROM mascotas.citas c  WHERE visible =1 GROUP BY MONTH (fecha), YEAR (fecha)';
    private $listacitas;

    public function __construct()
    {  
        
    }

    public function getCitas(){

        $this->listacitas=DB::select($this->query);
        return $this->listacitas;

    }

    public function getCitasAdmin(){
        $cantidad= DB::select($this->query2);
        return $cantidad; 
    }

    public function setCitas($Citas)
    {
        DB::insert('insert into citas (fecha, hora, motivo, cliente_idCedula, servicios_idServi, visible, veterin_idVeterin)
                    VALUES (:fecha, :hora, :motivo, :cliente_idCedula, :servicios_idServi, :visible, :veterin_idVeterin)',$Citas);
    }

    public function seleccionCita($id)
    {
       $citas = DB::select('SELECT  date_format(c.fecha,"%d-%m-%Y") AS Fecha , c.idCitas AS idCita,c.hora AS Hora ,c.motivo AS Motivo, c.visible as visible,
       s.servicios AS Servicio ,v.nombre AS Veterinario
       FROM (citas c JOIN servicios s ON c.servicios_idServi=s.idServi)
       LEFT JOIN veterin v ON v.idVeterin = c.veterin_idVeterin  where cliente_idCedula = :idCedula', ['idCedula' => $id]);
        return $citas;

    }

    public function editCita($idCita){
        $idCita = DB::select('SELECT  date_format(c.fecha,"%d-%m-%Y") AS Fecha , c.idCitas AS idCita,c.hora AS Hora ,c.motivo AS Motivo, c.visible as visible,
        s.servicios AS Servicio ,v.nombre AS Veterinario
        FROM (citas c JOIN servicios s ON c.servicios_idServi=s.idServi)
        LEFT JOIN veterin v ON v.idVeterin = c.veterin_idVeterin  where c.idCitas = :idCita', ['idCita' => $idCita]);
         return $idCita;
    }



    public function update($Citas)
    {
        /* dd($Citas); */
        DB::table('citas')
            ->where('idCitas', $Citas['idCitas'])
            ->update($Citas);
    }

    public function delete($Citas)
    {

        DB::table('citas')
            ->where('idCitas', $Citas['idCitas'])
            ->update($Citas);
    
    }


}
