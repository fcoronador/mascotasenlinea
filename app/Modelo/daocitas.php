<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daocitas{
//select date_format(fecha,"%m-%d-%Y") as fecha, hora, motivo from citas where cliente_idCedula ="100"
    private $query='select date_format(fecha,"%m-%d-%Y") as fecha, hora, motivo from citas ';
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
        DB::insert('insert into citas (fecha, hora, motivo, cliente_idCedula, servicios_idServi)
                    VALUES (:fecha, :hora, :motivo, :cliente_idCedula, :servicios_idServi)', ['cliente_idCedula' => $id]);
    }

    public function seleccionCita($id)
    {
       $citas = DB::select('select date_format(fecha,"%m-%d-%Y") as fecha, hora, motivo, visible from mascotas.citas where cliente_idCedula = :idCedula', ['idCedula' => $id]);
        return $citas;

    }
}
