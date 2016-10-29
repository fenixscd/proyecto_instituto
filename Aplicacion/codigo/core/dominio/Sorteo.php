<?php

namespace core\dominio;

use DateTime;
use phpDocumentor\Reflection\Types\This;


class Sorteo implements SorteoInterface
{

    private $usuario;
    private $nombre;
    private $descripcion;
    private $premios;
    private $fechaInicio;
    private $fechaFin;

    /**
     *
     * @return Usuario
     */
    public function getUsuario()
    {
        $this->usuario;
    }

    /**
     *
     * @return Usuario
     */
    public function getNombre()
    {
        $this->nombre;
    }

    /**
     *
     * @return Usuario
     */
    public function getDescripcion()
    {
        $this->descripcion;
    }

    /**
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        $this->fechaInicio;
    }

    /**
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        $this->fechaFin;
    }

    /**
     * @param Usuario
     * @return Sorteo
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @param String
     * @return Usuario
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = nombre;
        return $this;
    }

    /**
     * @param String
     * @return Usuario
     */
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @param DateTime
     * @return Usuario
     */
    public function setFechaInicio( DateTime $fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
        return $this;
    }

    /**
     * @param DateTime fechaFin
     * @return Usuario
     */
    public function setFechaFin(DateTime $fechaFin)
    {
        $this->fechaFin = $fechaFin;
        return $this;
    }
}