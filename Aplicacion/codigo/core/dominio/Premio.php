<?php

namespace core\dominio;
use core\dominio\PremioInterface;


class Premio implements PremioInterface
{
    private $idPremio;
    private $nombrePremio;
    private $descripcion;
    private $cantidad;

    public function getIdPremio()
    {
        return $this->idPremio;
    }

    public function getNombrePremio()
    {
        return $this->nombrePremio;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setIdPremio(int $idPremio)
    {
        $this->idPremio = $idPremio;
        return $this;
    }

    public function setNombreSorteo(string $nombrePremio)
    {
        $this->nombrePremio = $nombrePremio;
        return $this;
    }
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }
    public function setCantidad(int $cantidad)
    {
        $this->cantidad = $cantidad;
        return $this;
    }
}