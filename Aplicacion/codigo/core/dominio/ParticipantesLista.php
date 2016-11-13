<?php

namespace core\dominio;

use core\dominio\ParticipantesLista;

class ParticipantesLista
{
    private $participantes = array();


    public function addParticipante(ParticipanteInterface $participante)
    {
        array_push($this->participantes, $participante);
    }

    public function getTotalParticipantes ()
    {
        return count($this->participantes);
    }

    public function isParticipanteApuntado(ParticipanteInterface $participante)
    {
        $usuarioParticipante = $participante->getUsuario();

        foreach ($this->participantes as $participanteLista){
            if ($participanteLista->isElMismo($usuarioParticipante)) return true;
        }
        return false;
    }


}
