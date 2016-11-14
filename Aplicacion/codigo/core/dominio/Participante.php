<?php

namespace core\dominio;
use core\dominio\UsuarioInterfaz;
use core\dominio\ParticipanteInterface;

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
        $this->fechaInscripcion = $fechaInscripcion;
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
}