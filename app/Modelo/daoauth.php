<?php

namespace App\Modelo;

use Illuminate\Support\Facades\DB;


class daoauth
{
    //select date_format(fecha,"%m-%d-%Y") as fecha, hora, motivo from citas where cliente_idCedula ="100"
    private $query = 'select date_format(fecha,"%m-%d-%Y") as fecha, hora, motivo, visible from citas ';
    private $usuario;

    public function __construct()
    {
    }

    public function getUsuario($correo)
    {
        /* $this->usuario = DB::select($this->query); */
        $this->usuario = DB::select('select u.usuLogin as username,u.usuPassword as password, usuEstado as visible, r.id_Rol as rol from (usuario_s u join usuario_s_roles r on u.usuUsuSesion = r.usuRolUsuSesion ) where u.usuLogin = :usuLogin', ['usuLogin' => $correo]);
        return $this->usuario;
    }

    public function setCliente($persona)
    {
        DB::insert('INSERT INTO usuario_s (usuLogin, usuPassword, usuUsuSesion, usuEstado) VALUES (:usuLogin, :usuPassword, :usuUsuSesion, :usuEstado)', $persona);

        $cliente = DB::select('select * from usuario_s where usuUsuSesion = :usuUsuSesion', ['usuUsuSesion' => $persona['usuUsuSesion']]);
        $idcliente = '';
        foreach ($cliente as $item) {
            $idcliente = $item->usuId;
        }

        DB::insert(
            'INSERT INTO `usuario_s_roles` (id_rol, usuRolUsuSesion,usuario_s_usuId)
        VALUES (:id_rol, :usuRolUsuSesion,:usuario_s_usuId);',
            [
                'id_rol' => 3,
                'usuRolUsuSesion' => $persona['usuUsuSesion'],
                'usuario_s_usuId' => $idcliente
            ]
        );
    }

    public function verificarCorreo($correo)
    {
        $existe = DB::select('select usuLogin from usuario_s where usuLogin = :usuLogin', ['usuLogin' => $correo]);
        return $existe;
    }
    public function verificarCedula($idCedula)
    {
        $existe = DB::select('select idCedula from cliente where idCedula = :idCedula', ['idCedula' => $idCedula]);
        return $existe;
    }



}
