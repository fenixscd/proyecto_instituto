<?php

namespace core\dominio;
use core\dominio\UsuarioInterfaz;
use core\dominio\ParticipanteInterface;
use DateTime;

class Participante implements ParticipanteInterface
{

    private $usuario;
    private $fechaInscripcion;

    /**
     * @param UsuarioInterfaz $usuario
     * @param DateTimeInterface $fechaInscripcion
     */
    public function __construct(UsuarioInterfaz $usuario=null, $fechaInscripcion=null)
    {
        $this->usuario = $usuario;
        $this->fechaInscripcion = new DateTime($fechaInscripcion);
    }

    /**
     * @return Usuario;
     */
    public function getUsuario()
    {
       return $this->usuario;
    }

    /**
     * @return DateTime
     */
    public function getFechaInscripcion()
    {
        return $this->fechaInscripcion;
    }

    /**
     * @param UsuarioInterfaz $usuario
     * @return ParticipanteInterface
     */
    public function setUsuario(UsuarioInterfaz $usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @param DateTimeInterface $fechaInscripcion
     * @return ParticipanteInterface
     */
    public function setFechaInscripcion($fechaInscripcion)
    {
        $this->fechaInscripcion = $fechaInscripcion;
        return $this;
    }

    public function isElMismo(ParticipanteInterface $participante)
    {
        $usuarioParticipante = $participante->getUsuario();

        return $this->usuario->isElMismo($usuarioParticipante);
    }
}