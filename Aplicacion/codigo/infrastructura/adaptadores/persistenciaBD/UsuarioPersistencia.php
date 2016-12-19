<?php

namespace infrastructura\adaptadores\persistenciaBD;

use aplicacion\puertos\repositorios\UsuarioRepositorioInterface;

class UsuarioPersistencia implements UsuarioRepositorioInterface
{

    /**
     *
     * @param int $idUsuario
     * @return UsuarioInterfaz
     */
    public function getUsuario(int $idUsuario)
    {

    }

    /**
     * @param UsuarioInterfaz $usuario
     * @return boolean
     */
    public function save(UsuarioInterfaz $usuario)
    {

    }
}