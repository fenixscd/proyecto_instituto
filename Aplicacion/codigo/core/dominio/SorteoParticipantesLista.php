<?php

namespace core\dominio;

class SorteoParticipantesLista
{
    private $participantes = array();


    public function addUsuario(UsuarioInterfaz $usuario)
    {
        // El sorteo tiene que estar activo
        // No see puede apuntar a sorteos que a creado el mismo usuario
        // No se puede apuntar a sorteos que han finalizado

    }

}
