<?php

namespace core\aplicacion\factorias;

use core\dominio\Usuario;

class UsuarioFactory
{
    public static function create(  int    $idUsuario,
                                    string $nombreUsuario,
                                    string $email,
                                    string $password)
    {
        $usuario = new Usuario();

        $usuario.setIdUsuario($idUsuario);
        $usuario.setNombreUsuario($nombreUsuario);
        $usuario.setEmail($email);
        $usuario.setPassword($password);

        return $usuario;
    }
}
