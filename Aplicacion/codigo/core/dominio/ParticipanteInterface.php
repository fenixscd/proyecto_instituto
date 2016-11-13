<?php

namespace core\dominio;
use core\dominio\Usuario;

interface ParticipanteInterface
{
    /**
     * @return Usuario;
     */
    public function getUsuario();

    /**
     * @return DateTime
     */
    public function getFechaInscripcion();


    /**
     * @param UsuarioInterfaz $usuario
     * @return ParticipanteInterface
     */
    public function setUsuario(UsuarioInterfaz $usuario);

    /**
     * @param DateTimeInterface $fechaInscripcion
     * @return ParticipanteInterface
     */
    public function setFechaInscripcion($fechaInscripcion);
}