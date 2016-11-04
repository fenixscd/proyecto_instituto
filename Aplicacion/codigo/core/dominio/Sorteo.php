<?php

namespace core\dominio;

use core\dominio\Usuario;
use core\dominio\SorteoInterface;
use DateTime;


class Sorteo implements SorteoInterface
{
    private $idSorteo;
    private $nombreSorteo;
    private $usuario;
    private $descripcion;
    private $listaPremios;
    private $fechaInicio;
    private $fechaFin;


    /**
     * @return int
     */
    public function getIdSorteo()
    {
        return $this->idSorteo;
    }

    /**
     * @return string
     */
    public function getNombreSorteo()
    {
        return $this->getNombreSorteo();
    }

    /**
     *
     * @return Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getListaPremios()
    {
        return $this->listaPremios;
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
     * @param int idSorteo
     * @return Sorteo
     */
    public function setIdSorteo (int $idSorteo)
    {
        $this->idSorteo = $idSorteo;
        return  $this;
    }

    /**
     * @param string nombreSorteo
     * @return Usuario
     */
    public function setNombreSorteo(string $nombreSorteo)
    {
        $this->nombreSorteo = $nombreSorteo;
        return $this;
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
     * @param string descripcion
     * @return Usuario
     */
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @param string fechaInicio
     * @return Usuario
     */
    public function setFechaInicio(string $fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
        return $this;
    }

    /**
     * @param string fechaFin
     * @return Usuario
     */
    public function setFechaFin(string $fechaFin)
    {
        $this->fechaFin = $fechaFin;
        return $this;
    }
}