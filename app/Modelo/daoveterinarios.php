<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoveterinarios{

    private $query='select * from veterin';
/*     private $query3="SELECT  YEAR(fecha) AS anio, MONTH(fecha) AS mes , veterin_idVeterin as vet,count(visible) AS cantidad FROM controles WHERE visible =1 GROUP BY MONTH (fecha), YEAR (fecha), veterin_idVeterin";
 */    
    private $query2="SELECT nombre, count(idVeterin) as cant FROM veterin v left join citas c on 
    v.idVeterin=c.veterin_idVeterin where c.visible='1' group by idVeterin";
    private $listaveterinario;

    public function __construct()
    {  
        
    }

    public function getVeterinario(){

        $this->listaveterinario=DB::select($this->query);
        return $this->listaveterinario;

    }

    public function getVetAdmin(){
        $cantidad= DB::select($this->query2);
        return $cantidad; 
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
