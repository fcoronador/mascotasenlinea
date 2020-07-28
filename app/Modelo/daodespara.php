<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daodespara{

    private $query='select * from despara';
    private $listadesparacitacion;

    public function __construct()
    {  
        
    }

    public function getDesparas(){
        $this->$listadesparacitacion=DB::select($this->query);
        return $this->$listadesparacitacion;
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