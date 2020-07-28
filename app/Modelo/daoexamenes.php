<?php 

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoexamenes{

    private $query='select * from examenes';
    private $listaexamenes;

    public function __construct()
    {  
        
    }

    public function getExamenes(){
        $this->$listaexamenes = DB::select($this->query);
        return $this->$listaexamenes;
    }

    public function setExamen($examen)
    {
        DB::insert('insert into examenes (idExam, tipo, resulta, lab)
                    VALUES (:idExam, :tipo, :resulta, :lab)', $examen);
    }

    public function seleccionExamen($id)
    {
        $examen = DB::select('select * from examenes where idExam = :idExam', ['idExam' => $id]);
        return $examen;
    }

    public function update($examen)
    {
        DB::table('examenes')
            ->where('idExam', $examen['idCedula'])
            ->update($examen);
    }

    public function delete($examen)
    {
        DB::table('examenes')
            ->where('idExam', $examen['idExam'])
            ->update($examen);
    }
}