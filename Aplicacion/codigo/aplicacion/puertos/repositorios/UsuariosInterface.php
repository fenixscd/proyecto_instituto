<?php

namespace aplicacion\puertos\repositorios;

use core\dominio\UsuarioInterfaz;

interface UsuarioRepositorioInterface
{
    /**
     *
     * @param int $idUsuario
     * @return UsuarioInterfaz
     */
    public function getUsuario(int $idUsuario);

    /**
     * @param UsuarioInterfaz $usuario
     * @return boolean
     */
    public function save(UsuarioInterfaz $usuario);
}