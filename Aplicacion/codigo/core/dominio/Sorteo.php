<?php

namespace core\dominio;
use core\dominio\Usuario;

use DateTime;


class Sorteo
{
    private $idSorteo;
    private $sorteo;
    private $usuario;
    private $nombre;
    private $descripcion;
    private $premios;
    private $fechaInicio;
    private $fechaFin;


    /**
     * @return int
     */
    public function getIdSorteo()
    {
        return $this->idSorteo;
    }

    public function getSorteo()
    {
        return $this->getSorteo();
    }

    /**
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     *
     * @return string
     */
    public function getNombre()
    {
        return  $this->nombre;
    }

    /**
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * @param Usuario usuario
     * @return Sorteo
     */
    public function setUsuario(Usuario $usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @param String nombre
     * @return Usuario
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = nombre;
        return $this;
    }

    /**
     * @param String descripcion
     * @return Usuario
     */
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @param DateTime fechaInicio
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