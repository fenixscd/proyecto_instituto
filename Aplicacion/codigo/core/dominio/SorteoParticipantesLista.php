<?php

namespace core\dominio;

// No te puedes apuntar a un sorteo al que ya se esta apuntado
// No see puede apuntar a sorteos que a creado el mismo usuario
// No se puede apuntar a sorteos que han finalizado
// El sorteo tiene que estar activo




class SorteoParticipantesLista
{
    private $participantes = array();


    public function addUsuario(UsuarioInterfaz $usuario)
    {
        array_push($this->participantes, $usuario);
    }

    public function getTotalParticipantes ()
    {
        return count($this->participantes);
    }

    public function isParticipanteApuntado(UsuarioInterfaz $usuario)
    {
        foreach ($this->participantes as $participante){
            $apuntado = $participante->getNombreUsuario() === $usuario->getNombreUsuario();
            if ($apuntado){
                return true;
            }
        }
        return false;
    }


}
