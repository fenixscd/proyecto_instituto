<?php

namespace aplicacion\puertos\repositorios;

use core\dominio\UsuarioInterfaz;

interface UsuarioRepositorioInterfaz
{
    public function getUsuario(int $idUsuario);
    public function save(UsuarioInterfaz $usuario);
}