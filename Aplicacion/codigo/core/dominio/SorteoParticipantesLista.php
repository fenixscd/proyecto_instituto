<?php

namespace core\dominio;

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
