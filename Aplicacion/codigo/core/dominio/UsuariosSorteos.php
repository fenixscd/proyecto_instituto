<?php

namespace core\dominio;

class UsuariosSorteos
{
    private $Participantes = array(array());

    public function addUsuario(UsuarioInterfaz $usuario, SorteoInterface $sorteo)
    {
        // El sorteo tiene que estar activo
        // No see puede apuntar a sorteos que a creado el mismo usuario
        // No se puede apuntar a sorteos que han finalizado

    }

}
