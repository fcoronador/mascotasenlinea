<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoprocedi{

    private $query='select * from procedi';
    private $listaprocedimientos;

    public function __construct()
    {  
        
    }

    public function getProcedi(){
        $this->listaprocedimientos=DB::select($this->query);
        return $this->listaprocedimientos;
    }

    public function setProcedi($procedi){
        DB::insert('insert into procedimiento (idProc, fecha, sigDosis)
                    VALUES (:idProc, :fecha, :sigDosis)',$procedi);
    }

    public function seleccionProcedi($id){
        $procedi=DB::select('select * from procedi where idProc = :idProc',['idProc'=> $id]);
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

        /* DB::table('controles')->where('mascota_idMascotas', '=', 5)->delete(); 
        DB::table('procedi')->where('mascota_idMascotas', '=', 5)->delete(); 
        DB::table('mascota')->where('cliente_idCedula', '=', $id)->delete(); 
        DB::table('citas')->where('cliente_idCedula', '=', $id)->delete(); 
        DB::table('cliente')->where('idCedula', '=', $id)->delete(); */
    }
}