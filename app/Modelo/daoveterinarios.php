<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoveterinarios{

    private $query='select * from veterin';
    
    private $listaveterinario;

    public function __construct()
    {  
        
    }

    public function getVeterinario(){

        $this->listaveterinario=DB::select($this->query);
        return $this->listaveterinario;

    }

    public function setVeterinario($veterinario)
    {
        DB::insert('insert into veterin (rol, cargo,nombre,visible)
        VALUES (:rol, :cargo, :nombre, :visible)',$veterinario);

    }


    
    public function seleccioVeterinario($id){
        $veterinario=DB::select('select * from veterin where idVeterin = :idVeterin', ['idVeterin'=> $id]);
        return $veterinario;
    }    



    public function update($veterinario)
    {
        DB::table('veterin')
            ->where('idVeterin', $veterinario['idVeterin'])
            ->update($veterinario);
    }

    public function delete($veterinario)
    {
        DB::table('veterin')
            ->where('idVeterin', $veterinario['idVeterin'])
            ->update($veterinario);
    }


}
