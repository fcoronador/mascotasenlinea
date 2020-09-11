<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoservicios{

    private $query='select * from servicios';
    
    private $listaservicios;

    public function __construct()
    {  
        
    }

    public function getServicios(){

        $this->listaservicios=DB::select($this->query);
        return $this->listaservicios;

    }

    public function setServicios($servicio)
    {
        DB::insert('insert into servicios (servicios, visible)
        VALUES (:servicio, :visible)',$servicio);

    }


    
    public function seleccionServicio($id){
        $servicio=DB::select('select * from servicios where idServi = :idServi', ['idServi'=> $id]);
        return $servicio;
    }    



    public function update($servicio)
    {
        DB::table('servicios')
            ->where('idServi', $servicio['idServi'])
            ->update($servicio);
    }

    public function delete($servicio)
    {
        DB::table('servicios')
            ->where('idServi', $servicio['idServi'])
            ->update($servicio);
    }


}
